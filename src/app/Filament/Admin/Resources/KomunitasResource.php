<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\KomunitasResource\Pages;
use App\Models\Komunitas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KomunitasResource extends Resource
{
    protected static ?string $model = Komunitas::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Komunitas';
    protected static ?string $pluralModelLabel = 'Komunitas';
    protected static ?string $navigationGroup = 'Katalog';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_komunitas')
                    ->required()
                    ->label('Nama Komunitas'),

                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_komunitas')
                    ->label('Nama')
                    ->searchable(),

                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
{
    return [
        \App\Filament\Admin\Resources\KomunitasResource\RelationManagers\InformasiKendaraanRelationManager::class,
    ];
}

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKomunitas::route('/'),
            'create' => Pages\CreateKomunitas::route('/create'),
            'edit' => Pages\EditKomunitas::route('/{record}/edit'),
        ];
    }
}
