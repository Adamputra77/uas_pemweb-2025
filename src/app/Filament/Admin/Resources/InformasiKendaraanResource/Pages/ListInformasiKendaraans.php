<?php

namespace App\Filament\Admin\Resources\InformasiKendaraanResource\Pages;

use App\Filament\Admin\Resources\InformasiKendaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInformasiKendaraans extends ListRecords
{
    protected static string $resource = InformasiKendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
