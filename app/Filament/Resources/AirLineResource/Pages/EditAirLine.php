<?php

namespace App\Filament\Resources\AirLineResource\Pages;

use App\Filament\Resources\AirLineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAirLine extends EditRecord
{
    protected static string $resource = AirLineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
