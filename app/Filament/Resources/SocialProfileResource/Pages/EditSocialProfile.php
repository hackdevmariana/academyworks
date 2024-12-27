<?php

namespace App\Filament\Resources\SocialProfileResource\Pages;

use App\Filament\Resources\SocialProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSocialProfile extends EditRecord
{
    protected static string $resource = SocialProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
