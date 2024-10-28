<?php

namespace App\Filament\Resources\PenyalurBantuanResource\Pages;

use App\Filament\Resources\PenyalurBantuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenyalurBantuans extends ListRecords
{
    protected static string $resource = PenyalurBantuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
