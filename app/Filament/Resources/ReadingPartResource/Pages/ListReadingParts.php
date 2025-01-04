<?php

namespace App\Filament\Resources\ReadingPartResource\Pages;

use App\Filament\Resources\ReadingPartResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReadingParts extends ListRecords
{
    protected static string $resource = ReadingPartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
