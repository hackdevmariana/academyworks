<?php

namespace App\Filament\Resources\RecommendedChannelResource\Pages;

use App\Filament\Resources\RecommendedChannelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecommendedChannel extends EditRecord
{
    protected static string $resource = RecommendedChannelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
