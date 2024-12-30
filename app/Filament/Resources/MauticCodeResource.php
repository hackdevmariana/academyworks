<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MauticCodeResource\Pages;
use App\Filament\Resources\MauticCodeResource\RelationManagers;
use App\Models\MauticCode;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MauticCodeResource extends Resource
{
    protected static ?string $model = MauticCode::class;

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationIcon = 'eva-code';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Name'),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique()
                    ->label('Slug'),
                Forms\Components\Textarea::make('code')
                    ->required()
                    ->label('Code'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->date(),
            ])
            ->filters([
                // Agregar filtros si es necesario
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
            'index' => Pages\ListMauticCodes::route('/'),
            'create' => Pages\CreateMauticCode::route('/create'),
            'edit' => Pages\EditMauticCode::route('/{record}/edit'),
        ];
    }
}
