<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyMilestoneResource\Pages;
use App\Models\CompanyMilestone;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class CompanyMilestoneResource extends Resource
{
    protected static ?string $model = CompanyMilestone::class;

    protected static ?string $navigationLabel = 'Timeline';

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Milestone';

    protected static ?string $pluralModelLabel = 'Timeline';

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-clock';
    }

    public static function getNavigationGroup(): string
    {
        return 'Tentang Kami';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Data Milestone')
                ->columns(2)
                ->schema([
                    TextInput::make('year')
                        ->label('Tahun')
                        ->required()
                        ->maxLength(4)
                        ->placeholder('2024'),
                    TextInput::make('title')
                        ->label('Judul')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('300+ Proyek'),
                    Textarea::make('description')
                        ->label('Deskripsi')
                        ->required()
                        ->rows(3)
                        ->columnSpanFull()
                        ->placeholder('Tersebar dari Aceh sampai Papua...'),
                    TextInput::make('sort_order')
                        ->label('Urutan')
                        ->numeric()
                        ->default(0),
                    Toggle::make('is_active')
                        ->label('Aktif')
                        ->default(true),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable()
                    ->badge()
                    ->color('danger'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(80),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
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
            'index' => Pages\ListCompanyMilestones::route('/'),
            'create' => Pages\CreateCompanyMilestone::route('/create'),
            'edit' => Pages\EditCompanyMilestone::route('/{record}/edit'),
        ];
    }
}
