<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuoteResource\Pages;
use App\Filament\Resources\QuoteResource\RelationManagers;
use App\Models\Quote;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuoteResource extends Resource
{
    protected static ?string $model = Quote::class;
    protected static ?string $navigationGroup = 'Academic content';

    protected static ?string $navigationIcon = 'lucide-quote';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('quote')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('language')
                    ->required()
                    ->maxLength(2),
                Forms\Components\Select::make('quote_author_id')
                    ->label('Author')
                    ->options(QuoteAuthor::all()->pluck('name', 'id'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('quote')->limit(50),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('language'),
                Tables\Columns\TextColumn::make('author.name')->label('Author'),
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
            'index' => Pages\ListQuotes::route('/'),
            'create' => Pages\CreateQuote::route('/create'),
            'edit' => Pages\EditQuote::route('/{record}/edit'),
        ];
    }
}
