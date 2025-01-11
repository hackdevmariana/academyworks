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
use Filament\Tables\Filters\SelectFilter;


class ReadingPartResource extends Resource
{
    protected static ?string $model = ReadingPart::class;

    protected static ?string $navigationGroup = 'Academic content';
    protected static ?string $navigationIcon = 'phosphor-read-cv-logo-light';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ReadingPart::class, 'slug'),

                Forms\Components\TextInput::make('part_number')
                    ->label('Part Number')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required(),

                Forms\Components\Textarea::make('content')
                    ->label('Content')
                    ->required(),

                Forms\Components\Select::make('reading_id')
                    ->label('Reading')
                    ->relationship('reading', 'title')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reading.title')
                    ->label('Reading')
                    ->sortable(),
                Tables\Columns\TextColumn::make('part_number')
                    ->label('Part Number')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),
                
                
            ])
            ->filters([
                SelectFilter::make('reading_id')
                    ->label('Reading')
                    ->relationship('reading', 'title'),
            ])
            ->defaultSort('part_number');
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
