<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuoteAuthorResource\Pages;
use App\Filament\Resources\QuoteAuthorResource\RelationManagers;
use App\Models\QuoteAuthor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;


class QuoteAuthorResource extends Resource
{
    protected static ?string $model = QuoteAuthor::class;
    protected static ?string $navigationGroup = 'Academic content';

    protected static ?string $navigationIcon = 'bi-person';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('surname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('image')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->url()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('surname'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('url'),
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
            'index' => Pages\ListQuoteAuthors::route('/'),
            'create' => Pages\CreateQuoteAuthor::route('/create'),
            'edit' => Pages\EditQuoteAuthor::route('/{record}/edit'),
        ];
    }
}
