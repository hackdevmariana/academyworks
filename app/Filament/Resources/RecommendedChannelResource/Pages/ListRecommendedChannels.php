<?php

namespace App\Filament\Resources\RecommendedChannelResource\Pages;

use App\Filament\Resources\RecommendedChannelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecommendedChannels extends ListRecords
{
    protected static string $resource = RecommendedChannelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
