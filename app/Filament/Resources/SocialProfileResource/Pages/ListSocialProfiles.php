<?php

namespace App\Filament\Resources\SocialProfileResource\Pages;

use App\Filament\Resources\SocialProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSocialProfiles extends ListRecords
{
    protected static string $resource = SocialProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
