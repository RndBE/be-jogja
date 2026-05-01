<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubSolutionResource\Pages;
use App\Models\SubSolution;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class SubSolutionResource extends Resource
{
    protected static ?string $model = SubSolution::class;
    protected static ?string $navigationLabel = 'Sub Solusi';
    protected static ?int $navigationSort = 2;
    protected static ?string $modelLabel = 'Sub Solusi';
    protected static ?string $pluralModelLabel = 'Sub Solusi';

    public static function getNavigationIcon(): string { return 'heroicon-o-squares-2x2'; }
    public static function getNavigationGroup(): string { return 'Konten'; }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Dasar')
                ->columns(2)
                ->schema([
                    Select::make('solution_id')
                        ->label('Solusi Induk')
                        ->relationship('solution', 'name')
                        ->required()
                        ->searchable(),
                    TextInput::make('abbreviation')
                        ->label('Singkatan (misal: AWLR, ADR)'),
                    TextInput::make('name')
                        ->label('Nama Sub Solusi')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) =>
                            $set('slug', Str::slug($state ?? ''))),
                    TextInput::make('slug')
                        ->label('Slug (URL)')
                        ->required()
                        ->unique(SubSolution::class, 'slug', ignoreRecord: true),
                    TextInput::make('sort_order')
                        ->label('Urutan')
                        ->numeric()
                        ->default(0),
                ]),
            Section::make('Konten')
                ->schema([
                    RichEditor::make('main_content')->label('Konten Utama')->columnSpanFull(),
                    RichEditor::make('support_content')->label('Konten Pendukung')->columnSpanFull(),
                    RichEditor::make('application_content')->label('Konten Aplikasi')->columnSpanFull(),
                ]),
            Section::make('Media & Link')
                ->columns(2)
                ->schema([
                    FileUpload::make('icon')->label('Ikon')->image()->directory('sub-solutions/icons'),
                    FileUpload::make('thumbnail')->label('Thumbnail')->image()->directory('sub-solutions/thumbnails'),
                    TextInput::make('video_url')->label('URL Video')->url()->columnSpanFull(),
                    TextInput::make('link_3d')->label('Link 3D Viewer')->url(),
                    FileUpload::make('file_3d_local')->label('File 3D Lokal')->directory('sub-solutions/3d'),
                ]),
            Section::make('Status')->schema([
                Toggle::make('is_active')->label('Aktif')->default(true),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('solution.name')->label('Solusi')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('abbreviation')->label('Kode')->badge()->color('info'),
                Tables\Columns\TextColumn::make('name')->label('Nama')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('products_count')->label('Produk')->counts('products'),
                Tables\Columns\TextColumn::make('sort_order')->label('Urutan')->sortable(),
                Tables\Columns\IconColumn::make('is_active')->label('Aktif')->boolean(),
            ])
            ->defaultSort('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('solution')->relationship('solution', 'name')->label('Solusi'),
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
            'index' => Pages\ListSubSolutions::route('/'),
            'create' => Pages\CreateSubSolution::route('/create'),
            'edit' => Pages\EditSubSolution::route('/{record}/edit'),
        ];
    }
}
