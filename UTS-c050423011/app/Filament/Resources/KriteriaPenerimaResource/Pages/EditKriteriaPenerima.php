<?php

namespace App\Filament\Resources\KriteriaPenerimaResource\Pages;

use App\Filament\Resources\KriteriaPenerimaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKriteriaPenerima extends EditRecord
{
    protected static string $resource = KriteriaPenerimaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
