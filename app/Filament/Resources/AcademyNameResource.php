<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcademyNameResource\Pages;
use App\Filament\Resources\AcademyNameResource\RelationManagers;
use App\Models\AcademyName;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AcademyNameResource extends Resource
{
    protected static ?string $model = AcademyName::class;
    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationIcon = 'solar-square-academic-cap-broken';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->url()
                    ->nullable()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->label('Website')
                    ->url(fn (AcademyName $record) => $record->url) // Usa el modelo importado
                    ->openUrlInNewTab(), // Abre el enlace en una nueva pestaña
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
            'index' => Pages\ListAcademyNames::route('/'),
            'create' => Pages\CreateAcademyName::route('/create'),
            'edit' => Pages\EditAcademyName::route('/{record}/edit'),
        ];
    }
}
