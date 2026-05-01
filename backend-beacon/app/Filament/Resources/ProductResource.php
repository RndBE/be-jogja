<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationLabel = 'Produk';
    protected static ?int $navigationSort = 3;
    protected static ?string $modelLabel = 'Produk';
    protected static ?string $pluralModelLabel = 'Produk';

    public static function getNavigationIcon(): string { return 'heroicon-o-cpu-chip'; }
    public static function getNavigationGroup(): string { return 'Konten'; }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
            Grid::make(2)->schema([
                Group::make()->schema([
                    Section::make('Informasi Dasar')
                        ->columns(2)
                        ->schema([
                            Select::make('sub_solution_id')
                                ->label('Sub Solusi')
                                ->relationship('subSolution', 'name')
                                ->required()
                                ->searchable(),
                            TextInput::make('name')
                                ->label('Nama Produk')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (Set $set, ?string $state) =>
                                    $set('slug', Str::slug($state ?? ''))),
                            TextInput::make('slug')
                                ->label('Slug')
                                ->required()
                                ->unique(Product::class, 'slug', ignoreRecord: true),
                            TextInput::make('sort_order')->label('Urutan')->numeric()->default(0),
                            Toggle::make('is_active')->label('Aktif')->default(true)->inline(false),
                        ]),
                    Section::make('Detail Produk')
                        ->schema([
                            TagsInput::make('highlight_points')
                                ->label('Highlight Points')
                                ->placeholder('Tambah fitur unggulan...')
                                ->columnSpanFull(),
                            Textarea::make('description')->label('Deskripsi')->rows(4)->columnSpanFull(),
                            Textarea::make('use_case')->label('Use Case')->rows(3)->columnSpanFull(),
                        ]),
                ])->columnSpan(1),
                
                Group::make()->schema([
                    Section::make('Media')
                        ->columns(1)
                        ->schema([
                            FileUpload::make('thumbnail')->label('Thumbnail')->image()->directory('products/thumbnails'),
                            FileUpload::make('main_image')->label('Gambar Utama')->image()->directory('products/images'),
                            FileUpload::make('brochure_pdf')
                                ->label('Brosur PDF')
                                ->acceptedFileTypes(['application/pdf'])
                                ->directory('products/brochures'),
                        ]),
                    Section::make('Link Eksternal')
                        ->columns(1)
                        ->schema([
                            TextInput::make('link_lkpp_general')->label('Link LKPP Umum')->url(),
                            TextInput::make('link_lkpp_regency')->label('Link LKPP Kabupaten')->url(),
                            TextInput::make('link_tkdn')->label('Link TKDN')->url(),
                        ]),
                ])->columnSpan(1),
            ]),

            // === KOMPONEN PRODUK (Inline Repeater) ===
            Section::make('Komponen Produk')
                ->description('Komponen fisik produk (Data Logger, Sensor, Panel Surya, dll). Setiap komponen memiliki spesifikasi teknis tersendiri.')
                ->schema([
                    Repeater::make('components')
                        ->relationship()
                        ->label('')
                        ->schema([
                            TextInput::make('name')
                                ->label('Nama Komponen')
                                ->required()
                                ->placeholder('misal: Data Logger, Sensor Pressure, Panel Surya'),
                            TextInput::make('type')
                                ->label('Tipe')
                                ->placeholder('misal: RTU, Sensor, Power'),
                            FileUpload::make('image_1')
                                ->label('Gambar 1')
                                ->image()
                                ->directory('components/images'),
                            FileUpload::make('image_2')
                                ->label('Gambar 2')
                                ->image()
                                ->directory('components/images'),
                            TextInput::make('sort_order')
                                ->label('Urutan')
                                ->numeric()
                                ->default(0),

                            // === SPESIFIKASI TEKNIS per komponen ===
                            Repeater::make('specs')
                                ->relationship()
                                ->label('Spesifikasi Teknis')
                                ->schema([
                                    TextInput::make('category')
                                        ->label('Kategori Spek')
                                        ->placeholder('misal: Komunikasi, Elektrikal, Sensor')
                                        ->required(),
                                    TextInput::make('spec_name')
                                        ->label('Nama Spek')
                                        ->placeholder('misal: Protokol, Tegangan, Range')
                                        ->required(),
                                    TextInput::make('spec_value')
                                        ->label('Nilai')
                                        ->placeholder('misal: 4G/LTE, 12V DC, 0-30m')
                                        ->required(),
                                    TextInput::make('sort_order')
                                        ->label('Urutan')
                                        ->numeric()
                                        ->default(0),
                                ])
                                ->columns(4)
                                ->defaultItems(0)
                                ->reorderable()
                                ->orderColumn('sort_order')
                                ->collapsible()
                                ->itemLabel(fn (array $state): ?string =>
                                    ($state['category'] ?? '') . ': ' . ($state['spec_name'] ?? '') . ' = ' . ($state['spec_value'] ?? ''))
                                ->columnSpanFull(),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->reorderable()
                        ->orderColumn('sort_order')
                        ->collapsible()
                        ->itemLabel(fn (array $state): ?string =>
                            ($state['name'] ?? 'Komponen Baru') . ($state['type'] ? ' (' . $state['type'] . ')' : ''))
                        ->columnSpanFull(),
                ]),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail')->label('Foto')->square()->size(48)->disk('public'),
                Tables\Columns\TextColumn::make('subSolution.abbreviation')->label('Kode')->badge()->color('info'),
                Tables\Columns\TextColumn::make('name')->label('Nama Produk')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('subSolution.solution.name')->label('Solusi')->sortable(),
                Tables\Columns\TextColumn::make('components_count')->label('Komponen')->counts('components'),
                Tables\Columns\TextColumn::make('sort_order')->label('Urutan')->sortable(),
                Tables\Columns\IconColumn::make('is_active')->label('Aktif')->boolean(),
            ])
            ->defaultSort('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('subSolution')->relationship('subSolution', 'name')->label('Sub Solusi'),
                Tables\Filters\TernaryFilter::make('is_active')->label('Status'),
            ])
            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
