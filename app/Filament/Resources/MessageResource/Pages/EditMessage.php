<?php

namespace App\Filament\Resources\MessageResource\Pages;

use App\Filament\Resources\MessageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class EditMessage extends EditRecord
{
    protected static string $resource = MessageResource::class;

    protected function resolveRecord(string|int $key): Model
    {
        return static::getModel()::with('user')->findOrFail($key);
    }
}