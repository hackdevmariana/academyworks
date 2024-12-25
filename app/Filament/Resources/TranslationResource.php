<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TranslationResource\Pages;
use App\Filament\Resources\TranslationResource\RelationManagers;
use App\Models\Translation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TranslationResource extends Resource
{
    protected static ?string $model = Translation::class;

    protected static ?string $navigationIcon = 'bi-translate';
    protected static ?string $navigationLabel = 'Translations';
    protected static ?string $pluralLabel = 'Translations';
    protected static ?string $modelLabel = 'Translation';
    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')
                    ->required()
                    ->maxLength(255)
                    ->label('Key'),
                
                Forms\Components\TextInput::make('locale')
                    ->required()
                    ->maxLength(5)
                    ->label('Locale'),

                Forms\Components\Textarea::make('value')
                    ->required()
                    ->label('Value'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->sortable()
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('locale')
                    ->sortable()
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('value')
                    ->wrap()
                    ->searchable(),
            ])
            ->filters([
                // Puedes añadir filtros aquí si es necesario.
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
            'index' => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslation::route('/create'),
            'edit' => Pages\EditTranslation::route('/{record}/edit'),
        ];
    }
}
