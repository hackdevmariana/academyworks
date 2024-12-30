<?php

namespace App\Filament\Resources\MauticCodeResource\Pages;

use App\Filament\Resources\MauticCodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMauticCodes extends ListRecords
{
    protected static string $resource = MauticCodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
