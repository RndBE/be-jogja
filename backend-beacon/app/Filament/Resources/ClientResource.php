<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Models\Client;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;
    protected static ?string $navigationLabel = 'Klien';
    protected static ?int $navigationSort = 2;
    protected static ?string $modelLabel = 'Klien';
    protected static ?string $pluralModelLabel = 'Klien';

    public static function getNavigationIcon(): string { return 'heroicon-o-building-storefront'; }
    public static function getNavigationGroup(): string { return 'Proyek dan Klien'; }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Klien')
                ->columns(2)
                ->schema([
                    TextInput::make('name')
                        ->label('Nama Instansi / Perusahaan')
                        ->required(),
                    TextInput::make('website')
                        ->label('Website')
                        ->url()
                        ->nullable(),
                ]),
            Section::make('Logo')
                ->schema([
                    FileUpload::make('logo')
                        ->label('Logo (PNG/WebP transparan direkomendasikan)')
                        ->image()
                        ->directory('clients/logos'),
                ]),
            Section::make('Status')
                ->schema([
                    Toggle::make('is_active')
                        ->label('Tampil di website')
                        ->default(true),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')->disk('public')
                    ->label('Logo')
                    ->height(40),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('website')
                    ->label('Website')
                    ->url(fn ($record) => $record->website)
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('projects_count')
                    ->label('Proyek')
                    ->counts('projects'),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
            ])
            ->filters([
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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
