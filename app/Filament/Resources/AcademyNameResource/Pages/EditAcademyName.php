<?php

namespace App\Filament\Resources\AcademyNameResource\Pages;

use App\Filament\Resources\AcademyNameResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcademyName extends EditRecord
{
    protected static string $resource = AcademyNameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
