<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CopyResource\Pages;
use App\Filament\Resources\CopyResource\RelationManagers;
use App\Models\Copy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CopyResource extends Resource
{
    protected static ?string $model = Copy::class;
    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationIcon = 'tabler-copyleft';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->url()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('text')
                    ->required(),
                Forms\Components\TextInput::make('language')
                    ->required()
                    ->maxLength(5)
                    ->placeholder('ISO 639-1 (e.g., en, es)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('url'),
                Tables\Columns\TextColumn::make('text'),
                Tables\Columns\TextColumn::make('language'),
            ])
            ->filters([]);
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
            'index' => Pages\ListCopies::route('/'),
            'create' => Pages\CreateCopy::route('/create'),
            'edit' => Pages\EditCopy::route('/{record}/edit'),
        ];
    }
}
