<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageResource\Pages;
use App\Models\Message;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'eva-email-outline';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('subject')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('Sender Name')
                    ->disabled(),
                Forms\Components\TextInput::make('email')
                    ->label('Sender Email')
                    ->email()
                    ->disabled(),
                Forms\Components\Textarea::make('message')
                    ->required(),
                Forms\Components\TextInput::make('user.name')
                    ->label('User Name')
                    ->disabled()
                    ->visible(fn($record) => $record->user_id !== null),
                Forms\Components\TextInput::make('user.email')
                    ->label('User Email')
                    ->disabled()
                    ->visible(fn($record) => $record->user_id !== null),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subject')->searchable(),
                Tables\Columns\TextColumn::make('name')->searchable()
                    ->label('Sender Name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable()
                    ->label('Sender Email')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')->label('User Name')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('user.email')->label('User Email')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('message')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                // Agregar filtros si son necesarios
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMessages::route('/'),
            'create' => Pages\CreateMessage::route('/create'),
            'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
}