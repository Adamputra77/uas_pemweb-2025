<?php

namespace App\Filament\Admin\Resources\KomunitasResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class InformasiKendaraanRelationManager extends RelationManager
{
    protected static string $relationship = 'kendaraan';
    protected static ?string $title = 'Informasi Kendaraan';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama_kendaraan')->required(),
            Forms\Components\TextInput::make('merk')->required(),
            Forms\Components\TextInput::make('tipe')->required(),
            Forms\Components\TextInput::make('tahun')->numeric()->required(),
            Forms\Components\TextInput::make('warna')->required(),
            Forms\Components\Textarea::make('deskripsi')->columnSpanFull(),
            Forms\Components\FileUpload::make('gambar')
                ->directory('kendaraan')
                ->image()
                ->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nama_kendaraan'),
            Tables\Columns\TextColumn::make('merk'),
            Tables\Columns\TextColumn::make('tipe'),
            Tables\Columns\TextColumn::make('tahun'),
            Tables\Columns\TextColumn::make('warna'),
        ])
        ->headerActions([
            Tables\Actions\CreateAction::make(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }
}


