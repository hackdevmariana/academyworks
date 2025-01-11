<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReadingResource\Pages;
use App\Filament\Resources\ReadingResource\RelationManagers;
use App\Models\Reading;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReadingResource extends Resource
{
    protected static ?string $model = Reading::class;
    protected static ?string $navigationGroup = 'Academic content';

    protected static ?string $navigationIcon = 'phosphor-read-cv-logo-fill';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\TextInput::make('subtitle'),
            Forms\Components\TextInput::make('slug')->unique(),
            Forms\Components\Textarea::make('description'),
            Forms\Components\Select::make('author_id')
                ->relationship('author', 'id')
                ->getOptionLabelFromRecordUsing(fn($record) => $record->full_name)
                ->required(),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->searchable(),
            Tables\Columns\TextColumn::make('author.name')->label('Author'),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
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
            'index' => Pages\ListReadings::route('/'),
            'create' => Pages\CreateReading::route('/create'),
            'edit' => Pages\EditReading::route('/{record}/edit'),
        ];
    }
}
