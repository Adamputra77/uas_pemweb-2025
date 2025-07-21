<?php

namespace App\Filament\Admin\Resources\InformasiKendaraanResource\Pages;

use App\Filament\Admin\Resources\InformasiKendaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformasiKendaraan extends EditRecord
{
    protected static string $resource = InformasiKendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
