<?php

namespace App\Filament\Resources\AirLineResource\Pages;

use App\Filament\Resources\AirLineResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAirLines extends ListRecords
{
    protected static string $resource = AirLineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
