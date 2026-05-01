<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectCategoryResource\Pages;
use App\Models\ProjectCategory;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;

class ProjectCategoryResource extends Resource
{
    protected static ?string $model = ProjectCategory::class;
    protected static ?string $navigationLabel = 'Kategori Proyek';
    protected static ?int $navigationSort = 3;
    protected static ?string $modelLabel = 'Kategori Proyek';
    protected static ?string $pluralModelLabel = 'Kategori Proyek';

    public static function getNavigationIcon(): string { return 'heroicon-o-tag'; }
    public static function getNavigationGroup(): string { return 'Proyek dan Klien'; }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Nama Kategori')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn (Set $set, ?string $state) =>
                    $set('slug', Str::slug($state ?? ''))),
            TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->unique(ProjectCategory::class, 'slug', ignoreRecord: true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->copyable(),
                Tables\Columns\TextColumn::make('projects_count')
                    ->label('Jumlah Proyek')
                    ->counts('projects'),
            ])
            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjectCategories::route('/'),
            'create' => Pages\CreateProjectCategory::route('/create'),
            'edit' => Pages\EditProjectCategory::route('/{record}/edit'),
        ];
    }
}
