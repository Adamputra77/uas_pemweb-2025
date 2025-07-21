<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\InformasiKendaraanResource\Pages;
use App\Models\InformasiKendaraan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class InformasiKendaraanResource extends Resource
{
    protected static ?string $model = InformasiKendaraan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Informasi Kendaraan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_kendaraan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('merk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tipe')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(date('Y')),
                Forms\Components\TextInput::make('warna')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->nullable()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->directory('kendaraan-images')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_kendaraan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('merk')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipe')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->sortable(),
                Tables\Columns\TextColumn::make('warna')
                    ->searchable()
                    ->sortable(),
                            Tables\Columns\ImageColumn::make('gambar')
                ->label('Gambar')
                ->disk('public')  // cukup pakai disk saja
                ->rounded(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInformasiKendaraans::route('/'),
            'create' => Pages\CreateInformasiKendaraan::route('/create'),
            'edit' => Pages\EditInformasiKendaraan::route('/{record}/edit'),
        ];
    }
}
