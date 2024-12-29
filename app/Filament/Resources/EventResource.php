<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use App\Models\Place;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?string $navigationGroup = 'Academic content';

    protected static ?string $navigationIcon = 'gmdi-event-r';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('slug')->unique()->required(),
                Forms\Components\TextInput::make('subtitle'),
                Forms\Components\Textarea::make('abstract'),
                Forms\Components\RichEditor::make('description'),
                Forms\Components\FileUpload::make('image'),
                Forms\Components\TextInput::make('image_url'),
                Forms\Components\FileUpload::make('banner'),
                Forms\Components\TextInput::make('banner_url'),
                Forms\Components\Select::make('place')
                    ->options(Place::pluck('name', 'slug'))
                    ->searchable()
                    ->required(),
                Forms\Components\DatePicker::make('start_date')->required(),
                Forms\Components\TimePicker::make('start_time')->required(),
                Forms\Components\DatePicker::make('end_date')->required(),
                Forms\Components\TimePicker::make('end_time')->required(),
                Forms\Components\TextInput::make('language')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('place'),
                Tables\Columns\TextColumn::make('start_date')->date(),
                Tables\Columns\TextColumn::make('end_date')->date(),
                Tables\Columns\TextColumn::make('language'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
