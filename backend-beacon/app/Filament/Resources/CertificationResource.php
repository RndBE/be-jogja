<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificationResource\Pages;
use App\Models\Certification;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class CertificationResource extends Resource
{
    protected static ?string $model = Certification::class;

    protected static ?string $navigationLabel = 'Sertifikasi & HAKI';

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = 'Sertifikasi';

    protected static ?string $pluralModelLabel = 'Sertifikasi & HAKI';

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-shield-check';
    }

    public static function getNavigationGroup(): string
    {
        return 'Tentang Kami';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Data Sertifikasi')
                ->columns(2)
                ->schema([
                    TextInput::make('title')
                        ->label('Judul')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('ISO 9001:2025'),
                    TextInput::make('subtitle')
                        ->label('Subtitle')
                        ->maxLength(255)
                        ->placeholder('Manajemen Mutu'),
                    Textarea::make('description')
                        ->label('Deskripsi')
                        ->required()
                        ->rows(3)
                        ->columnSpanFull(),
                    Select::make('style')
                        ->label('Gaya Tampilan')
                        ->options([
                            'light' => 'Terang (putih)',
                            'dark' => 'Gelap (hitam)',
                        ])
                        ->default('light'),
                    TextInput::make('icon_name')
                        ->label('Nama Icon (Lucide)')
                        ->placeholder('Award, ShieldCheck, Target, FileBadge')
                        ->helperText('Nama icon dari Lucide Icons'),
                    TextInput::make('status_label')
                        ->label('Label Status')
                        ->default('Certified')
                        ->placeholder('Certified, Registered'),
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
                Tables\Columns\TextColumn::make('subtitle')
                    ->label('Subtitle')
                    ->badge()
                    ->color('danger'),
                Tables\Columns\TextColumn::make('style')
                    ->label('Gaya')
                    ->badge()
                    ->color(fn (string $state) => $state === 'dark' ? 'gray' : 'info'),
                Tables\Columns\TextColumn::make('status_label')
                    ->label('Status'),
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
            'index' => Pages\ListCertifications::route('/'),
            'create' => Pages\CreateCertification::route('/create'),
            'edit' => Pages\EditCertification::route('/{record}/edit'),
        ];
    }
}
