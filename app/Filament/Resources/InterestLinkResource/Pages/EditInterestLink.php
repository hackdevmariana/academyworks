<?php

namespace App\Filament\Resources\InterestLinkResource\Pages;

use App\Filament\Resources\InterestLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInterestLink extends EditRecord
{
    protected static string $resource = InterestLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
