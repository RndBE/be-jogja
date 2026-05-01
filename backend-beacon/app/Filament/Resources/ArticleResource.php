<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationLabel = 'Artikel';

    protected static ?int $navigationSort = 5;

    protected static ?string $modelLabel = 'Artikel';

    protected static ?string $pluralModelLabel = 'Artikel';

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-newspaper';
    }

    public static function getNavigationGroup(): string
    {
        return 'Konten';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Grid::make(3)->schema([
                    Group::make()->schema([
                        Section::make('Informasi Artikel')
                            ->columns(2)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Judul')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state ?? ''))),
                                TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(Article::class, 'slug', ignoreRecord: true),
                                Textarea::make('excerpt')
                                    ->label('Ringkasan')
                                    ->rows(3)
                                    ->columnSpanFull(),
                                Textarea::make('content')
                                    ->label('Konten')
                                    ->required()
                                    ->rows(18)
                                    ->helperText('Bisa berisi HTML ringan dari AI Artikel. Simpan class beacon-* agar blok visual tetap tampil di website.')
                                    ->columnSpanFull(),
                            ]),
                    ])->columnSpan(2),

                    Group::make()->schema([
                        Section::make('Publikasi')
                            ->schema([
                                Toggle::make('is_active')
                                    ->label('Aktif (tampil di website)')
                                    ->default(true),
                                Toggle::make('is_featured')
                                    ->label('Featured')
                                    ->default(false),
                                DatePicker::make('published_at')
                                    ->label('Tanggal Publikasi')
                                    ->native(false)
                                    ->default(now()),
                            ]),
                        Section::make('Metadata')
                            ->schema([
                                Select::make('category')
                                    ->label('Kategori')
                                    ->options([
                                        'Studi Kasus' => 'Studi Kasus',
                                        'Artikel Teknis' => 'Artikel Teknis',
                                        'Berita Produk' => 'Berita Produk',
                                    ])
                                    ->searchable()
                                    ->preload()
                                    ->createOptionForm([
                                        TextInput::make('name')
                                            ->label('Kategori Baru')
                                            ->required(),
                                    ])
                                    ->createOptionUsing(fn (array $data): string => $data['name']),
                                ColorPicker::make('category_color')
                                    ->label('Warna Kategori')
                                    ->default('#C8102E'),
                                TextInput::make('author')
                                    ->label('Penulis')
                                    ->default('Tim Engineering')
                                    ->maxLength(255),
                                TextInput::make('read_time')
                                    ->label('Waktu Baca')
                                    ->placeholder('misal: 8 min')
                                    ->maxLength(255),
                                TagsInput::make('tags')
                                    ->label('Tags')
                                    ->placeholder('Tambah tag...'),
                            ]),
                        Section::make('Media')
                            ->schema([
                                FileUpload::make('thumbnail')
                                    ->label('Thumbnail')
                                    ->image()
                                    ->directory('articles/thumbnails'),
                            ]),
                    ])->columnSpan(1),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')->label('Thumbnail')->square()->size(48)->disk('public'),
                Tables\Columns\TextColumn::make('title')->label('Judul')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('category')->label('Kategori')->badge()->searchable(),
                Tables\Columns\TextColumn::make('author')->label('Penulis')->searchable(),
                Tables\Columns\TextColumn::make('read_time')->label('Waktu Baca'),
                Tables\Columns\TextColumn::make('published_at')->label('Publikasi')->date('d M Y')->sortable(),
                Tables\Columns\IconColumn::make('is_featured')->label('Featured')->boolean(),
                Tables\Columns\IconColumn::make('is_active')->label('Aktif')->boolean(),
            ])
            ->defaultSort('published_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'Studi Kasus' => 'Studi Kasus',
                        'Artikel Teknis' => 'Artikel Teknis',
                        'Berita Produk' => 'Berita Produk',
                    ]),
                Tables\Filters\TernaryFilter::make('is_featured')->label('Featured'),
                Tables\Filters\TernaryFilter::make('is_active')->label('Aktif'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
