<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlaceResource\Pages;
use App\Filament\Resources\PlaceResource\RelationManagers;
use App\Models\Place;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class PlaceResource extends Resource
{
    protected static ?string $model = Place::class;
    protected static ?string $navigationGroup = 'Academic content';

    protected static ?string $navigationIcon = 'bi-house-fill';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(Place::class, 'slug')
                    ->maxLength(255),
                Forms\Components\TextInput::make('logo')->url()->maxLength(255),
                Forms\Components\TextInput::make('address')->maxLength(255),
                Forms\Components\TextInput::make('city')->maxLength(255),
                Forms\Components\TextInput::make('postcode')->maxLength(20),
                Forms\Components\TextInput::make('country')->maxLength(100),
                Forms\Components\TextInput::make('website')->url()->maxLength(255),
                Forms\Components\TextInput::make('phone')->maxLength(50),
                Forms\Components\TextInput::make('email')->email()->maxLength(255),
                Forms\Components\HasManyRepeater::make('socialProfiles')
                    ->label('Social Profiles')
                    ->relationship('socialProfiles')
                    ->schema([
                        Forms\Components\TextInput::make('socialnetwork')->required(),
                        Forms\Components\TextInput::make('url')->url()->required(),
                        Forms\Components\TextInput::make('text')->nullable(),
                    ])
                    ->collapsible(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('slug')->searchable(),
                Tables\Columns\ImageColumn::make('logo')->circular(),
                Tables\Columns\TextColumn::make('city')->searchable(),
                Tables\Columns\TextColumn::make('country')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListPlaces::route('/'),
            'create' => Pages\CreatePlace::route('/create'),
            'edit' => Pages\EditPlace::route('/{record}/edit'),
        ];
    }
}
