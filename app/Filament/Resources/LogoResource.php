<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LogoResource\Pages;
use App\Filament\Resources\LogoResource\RelationManagers;

use App\Models\Logo;
use Filament\Forms;
use Filament\Forms\Form;

use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class LogoResource extends Resource
{
    protected static ?string $model = Logo::class;

    protected static ?string $navigationIcon = 'heroicon-o-paint-brush';
    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form

    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                TextInput::make('url')
                    ->url()
                    ->nullable()
                    ->label('Logo URL'),
                FileUpload::make('image')
                    ->imageEditor()
                    ->label('Upload Logo Image')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('url')->label('Logo URL')->sortable(),
                Tables\Columns\ImageColumn::make('image')->label('Image'),
            ])
            ->filters([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLogos::route('/'),
            'create' => Pages\CreateLogo::route('/create'),
            'edit' => Pages\EditLogo::route('/{record}/edit'),
        ];
    }
}