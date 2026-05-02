<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrackRecordResource\Pages;
use App\Models\TrackRecord;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class TrackRecordResource extends Resource
{
    protected static ?string $model = TrackRecord::class;

    protected static ?string $navigationLabel = 'Track Record';

    protected static ?int $navigationSort = 3;

    protected static ?string $modelLabel = 'Track Record';

    protected static ?string $pluralModelLabel = 'Track Record';

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-trophy';
    }

    public static function getNavigationGroup(): string
    {
        return 'Solusi';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Track Record')
                ->columns(2)
                ->schema([
                    Select::make('sub_solution_id')
                        ->label('Sub Solusi')
                        ->relationship('subSolution', 'name')
                        ->searchable()
                        ->preload()
                        ->required(),
                    TextInput::make('project_name')
                        ->label('Nama Proyek')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('Bendungan Cipanas'),
                    TextInput::make('client')
                        ->label('Klien')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('BWS Ciliwung-Cisadane'),
                    TextInput::make('year')
                        ->label('Tahun')
                        ->required()
                        ->maxLength(4)
                        ->placeholder('2024'),
                    TextInput::make('location')
                        ->label('Lokasi')
                        ->maxLength(255)
                        ->placeholder('Jawa Barat'),
                    TextInput::make('sort_order')
                        ->label('Urutan')
                        ->numeric()
                        ->default(0),
                ]),
            Section::make('Status')
                ->schema([
                    Toggle::make('is_active')
                        ->label('Aktif (tampil di website)')
                        ->default(true),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subSolution.name')
                    ->label('Sub Solusi')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('primary'),
                Tables\Columns\TextColumn::make('project_name')
                    ->label('Nama Proyek')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('client')
                    ->label('Klien')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable()
                    ->badge()
                    ->color('success'),
                Tables\Columns\TextColumn::make('location')
                    ->label('Lokasi')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
            ])
            ->defaultSort('year', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('sub_solution')
                    ->relationship('subSolution', 'name')
                    ->label('Sub Solusi')
                    ->searchable()
                    ->preload(),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Aktif'),
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
            'index' => Pages\ListTrackRecords::route('/'),
            'create' => Pages\CreateTrackRecord::route('/create'),
            'edit' => Pages\EditTrackRecord::route('/{record}/edit'),
        ];
    }
}
