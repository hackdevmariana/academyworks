<?php

namespace App\Filament\Resources\QuoteAuthorResource\Pages;

use App\Filament\Resources\QuoteAuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuoteAuthors extends ListRecords
{
    protected static string $resource = QuoteAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
