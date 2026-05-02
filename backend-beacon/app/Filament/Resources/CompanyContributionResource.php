<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyContributionResource\Pages;
use App\Models\CompanyContribution;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class CompanyContributionResource extends Resource
{
    protected static ?string $model = CompanyContribution::class;

    protected static ?string $navigationLabel = 'Pilar Kontribusi';

    protected static ?int $navigationSort = 3;

    protected static ?string $modelLabel = 'Kontribusi';

    protected static ?string $pluralModelLabel = 'Pilar Kontribusi';

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-chart-bar';
    }

    public static function getNavigationGroup(): string
    {
        return 'Tentang Kami';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Data Kontribusi')
                ->columns(2)
                ->schema([
                    TextInput::make('title')
                        ->label('Judul')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('Water Management'),
                    TextInput::make('icon_name')
                        ->label('Nama Icon (Lucide)')
                        ->placeholder('Target, Eye, Building2')
                        ->helperText('Nama icon dari Lucide Icons'),
                    Textarea::make('description')
                        ->label('Deskripsi')
                        ->required()
                        ->rows(3)
                        ->columnSpanFull(),
                    TextInput::make('metric')
                        ->label('Angka Metrik')
                        ->required()
                        ->placeholder('200+'),
                    TextInput::make('metric_label')
                        ->label('Label Metrik')
                        ->required()
                        ->placeholder('Stasiun Air'),
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
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('metric')
                    ->label('Metrik')
                    ->badge()
                    ->color('danger'),
                Tables\Columns\TextColumn::make('metric_label')
                    ->label('Label'),
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
            'index' => Pages\ListCompanyContributions::route('/'),
            'create' => Pages\CreateCompanyContribution::route('/create'),
            'edit' => Pages\EditCompanyContribution::route('/{record}/edit'),
        ];
    }
}
