<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationLabel = 'Testimoni';

    protected static ?int $navigationSort = 3;

    protected static ?string $modelLabel = 'Testimoni';

    protected static ?string $pluralModelLabel = 'Testimoni';

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-chat-bubble-left-right';
    }

    public static function getNavigationGroup(): string
    {
        return 'Proyek dan Klien';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Narasumber')
                ->columns(2)
                ->schema([
                    TextInput::make('name')
                        ->label('Nama')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('position')
                        ->label('Jabatan')
                        ->maxLength(255),
                    TextInput::make('organization')
                        ->label('Organisasi / Instansi')
                        ->helperText('Jika kosong, website akan memakai nama klien yang dipilih.')
                        ->maxLength(255),
                    TextInput::make('initials')
                        ->label('Inisial')
                        ->helperText('Opsional. Jika kosong akan dibuat dari nama.')
                        ->maxLength(10),
                    Select::make('client_id')
                        ->label('Klien Terkait')
                        ->relationship('client', 'name')
                        ->searchable()
                        ->preload()
                        ->nullable(),
                    Select::make('project_id')
                        ->label('Proyek Terkait')
                        ->relationship('project', 'name')
                        ->searchable()
                        ->preload()
                        ->nullable(),
                ]),
            Section::make('Testimoni')
                ->schema([
                    Textarea::make('quote')
                        ->label('Kutipan')
                        ->required()
                        ->rows(5)
                        ->columnSpanFull(),
                ]),
            Section::make('Foto')
                ->schema([
                    FileUpload::make('photo')
                        ->label('Foto narasumber')
                        ->image()
                        ->directory('testimonials/photos'),
                ]),
            Section::make('Status dan Urutan')
                ->columns(3)
                ->schema([
                    TextInput::make('sort_order')
                        ->label('Urutan')
                        ->numeric()
                        ->default(0),
                    Toggle::make('is_featured')
                        ->label('Tampil di homepage')
                        ->default(true),
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
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Foto')
                    ->disk('public')
                    ->circular()
                    ->size(42),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->label('Jabatan')
                    ->limit(42)
                    ->searchable(),
                Tables\Columns\TextColumn::make('organization')
                    ->label('Organisasi')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('client.name')
                    ->label('Klien')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Homepage')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('client')->relationship('client', 'name')->label('Klien'),
                Tables\Filters\TernaryFilter::make('is_featured')->label('Homepage'),
                Tables\Filters\TernaryFilter::make('is_active')->label('Aktif'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
