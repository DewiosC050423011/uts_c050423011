<?php

namespace App\Filament\Resources\PenyalurBantuanResource\Pages;

use App\Filament\Resources\PenyalurBantuanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyalurBantuan extends EditRecord
{
    protected static string $resource = PenyalurBantuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
