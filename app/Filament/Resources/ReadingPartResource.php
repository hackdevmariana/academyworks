<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReadingPartResource\Pages;
use App\Filament\Resources\ReadingPartResource\RelationManagers;
use App\Models\ReadingPart;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReadingPartResource extends Resource
{
    protected static ?string $model = ReadingPart::class;

    protected static ?string $navigationGroup = 'Academic content';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListReadingParts::route('/'),
            'create' => Pages\CreateReadingPart::route('/create'),
            'edit' => Pages\EditReadingPart::route('/{record}/edit'),
        ];
    }
}
