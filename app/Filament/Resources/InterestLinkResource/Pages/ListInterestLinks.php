<?php

namespace App\Filament\Resources\InterestLinkResource\Pages;

use App\Filament\Resources\InterestLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInterestLinks extends ListRecords
{
    protected static string $resource = InterestLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
