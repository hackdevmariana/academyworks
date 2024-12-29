<?php

namespace App\Filament\Resources\QuoteAuthorResource\Pages;

use App\Filament\Resources\QuoteAuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuoteAuthor extends EditRecord
{
    protected static string $resource = QuoteAuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
