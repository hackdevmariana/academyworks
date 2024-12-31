<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InterestLinkResource\Pages;
use App\Filament\Resources\InterestLinkResource\RelationManagers;
use App\Models\InterestLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InterestLinkResource extends Resource
{
    protected static ?string $model = InterestLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('text')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->url()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('language')
                    ->required()
                    ->maxLength(10),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('text')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('url')->url()->sortable()->searchable(),
                Tables\Columns\TextColumn::make('language')->sortable()->searchable(),
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListInterestLinks::route('/'),
            'create' => Pages\CreateInterestLink::route('/create'),
            'edit' => Pages\EditInterestLink::route('/{record}/edit'),
        ];
    }
}
