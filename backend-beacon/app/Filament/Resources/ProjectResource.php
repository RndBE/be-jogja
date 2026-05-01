<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
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

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationLabel = 'Proyek';
    protected static ?int $navigationSort = 1;
    protected static ?string $modelLabel = 'Proyek';
    protected static ?string $pluralModelLabel = 'Proyek';

    public static function getNavigationIcon(): string { return 'heroicon-o-building-office-2'; }
    public static function getNavigationGroup(): string { return 'Proyek dan Klien'; }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Proyek')
                ->columns(2)
                ->schema([
                    TextInput::make('name')
                        ->label('Nama Proyek')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) =>
                            $set('slug', Str::slug($state ?? ''))),
                    TextInput::make('slug')
                        ->label('Slug')
                        ->required()
                        ->unique(Project::class, 'slug', ignoreRecord: true),
                    Select::make('client_id')
                        ->label('Klien')
                        ->relationship('client', 'name')
                        ->searchable()
                        ->nullable(),
                    Select::make('project_category_id')
                        ->label('Kategori')
                        ->relationship('category', 'name')
                        ->searchable()
                        ->nullable(),
                    TextInput::make('location')->label('Lokasi'),
                    TextInput::make('year')->label('Tahun')->numeric()->minValue(2000)->maxValue(2099),
                    TextInput::make('website')->label('Website Proyek')->url(),
                    TextInput::make('sort_order')->label('Urutan')->numeric()->default(0),
                ]),
            Section::make('Konten')
                ->schema([
                    RichEditor::make('description')->label('Deskripsi Singkat')->columnSpanFull(),
                    RichEditor::make('challenge_content')->label('Tantangan')->columnSpanFull(),
                    RichEditor::make('solution_content')->label('Solusi yang Diterapkan')->columnSpanFull(),
                ]),
            Section::make('Media')
                ->columns(2)
                ->schema([
                    FileUpload::make('thumbnail')->label('Thumbnail')->image()->directory('projects/thumbnails'),
                    FileUpload::make('main_image')->label('Gambar Utama')->image()->directory('projects/images'),
                    TextInput::make('white_paper_url')->label('URL White Paper')->url()->columnSpanFull(),
                ]),
            Section::make('Status dan Pengaturan')
                ->columns(2)
                ->schema([
                    Toggle::make('is_active')->label('Aktif (tampil di website)')->default(true),
                    Toggle::make('is_featured')->label('Featured (tampil di homepage)')->default(false),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('main_image')->label('Foto')->square()->size(48)->disk('public'),
                Tables\Columns\TextColumn::make('name')->label('Nama Proyek')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('client.name')->label('Klien')->searchable(),
                Tables\Columns\TextColumn::make('category.name')->label('Kategori')->badge()->color('success'),
                Tables\Columns\TextColumn::make('location')->label('Lokasi')->searchable(),
                Tables\Columns\TextColumn::make('year')->label('Tahun')->sortable(),
                Tables\Columns\IconColumn::make('is_featured')->label('Featured')->boolean(),
                Tables\Columns\IconColumn::make('is_active')->label('Aktif')->boolean(),
            ])
            ->defaultSort('year', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('category')->relationship('category', 'name')->label('Kategori'),
                Tables\Filters\SelectFilter::make('client')->relationship('client', 'name')->label('Klien'),
                Tables\Filters\TernaryFilter::make('is_featured')->label('Featured'),
                Tables\Filters\TernaryFilter::make('is_active')->label('Aktif'),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
