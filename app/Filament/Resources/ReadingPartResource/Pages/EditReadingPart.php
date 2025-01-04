<?php

namespace App\Filament\Resources\ReadingPartResource\Pages;

use App\Filament\Resources\ReadingPartResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReadingPart extends EditRecord
{
    protected static string $resource = ReadingPartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
