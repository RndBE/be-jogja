<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageSettingResource\Pages;
use App\Models\PageSetting;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class PageSettingResource extends Resource
{
    protected static ?string $model = PageSetting::class;
    protected static ?string $navigationLabel = 'Pengaturan Halaman';
    protected static ?int $navigationSort = 1;
    protected static ?string $modelLabel = 'Pengaturan';
    protected static ?string $pluralModelLabel = 'Pengaturan Halaman';

    public static function getNavigationIcon(): string { return 'heroicon-o-cog-6-tooth'; }
    public static function getNavigationGroup(): string { return 'Pengaturan'; }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('group')
                ->label('Grup Pengaturan')
                ->options([
                    'hero' => 'Hero (Beranda)',
                    'stats' => 'Statistik (Beranda)',
                    'about' => 'Tentang Kami',
                    'contact' => 'Kontak',
                    'seo' => 'SEO',
                ])
                ->required()
                ->searchable(),
            TextInput::make('key')
                ->label('Key (nama variabel)')
                ->required()
                ->helperText('Contoh: hero_title, hero_subtitle, stats_projects'),
            Textarea::make('value')
                ->label('Nilai')
                ->rows(3)
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('group')
                    ->label('Grup')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('key')
                    ->label('Key')
                    ->searchable()
                    ->copyable()
                    ->fontFamily('mono'),
                Tables\Columns\TextColumn::make('value')
                    ->label('Nilai')
                    ->limit(60)
                    ->searchable(),
            ])
            ->defaultSort('group')
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->label('Grup')
                    ->options([
                        'hero' => 'Hero',
                        'stats' => 'Statistik',
                        'about' => 'Tentang Kami',
                        'contact' => 'Kontak',
                        'seo' => 'SEO',
                    ]),
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
            'index' => Pages\ListPageSettings::route('/'),
            'create' => Pages\CreatePageSetting::route('/create'),
            'edit' => Pages\EditPageSetting::route('/{record}/edit'),
        ];
    }
}
