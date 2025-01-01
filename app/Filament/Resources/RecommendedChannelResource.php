<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecommendedChannelResource\Pages;
use App\Filament\Resources\RecommendedChannelResource\RelationManagers;
use App\Models\RecommendedChannel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecommendedChannelResource extends Resource
{
    protected static ?string $model = RecommendedChannel::class;
    protected static ?string $navigationGroup = 'Academic content';

    protected static ?string $navigationIcon = 'bi-youtube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_active')
                    ->label('Is Active')
                    ->default(true),
                Forms\Components\TextInput::make('text')
                    ->required()
                    ->label('Text'),
                Forms\Components\TextInput::make('url')
                    ->url()
                    ->required()
                    ->label('URL'),
                Forms\Components\TextInput::make('logo')
                    ->url()
                    ->required()
                    ->label('Logo'),
                Forms\Components\TextInput::make('language')
                    ->required()
                    ->label('Language'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('text')->label('Text'),
                Tables\Columns\TextColumn::make('url')->label('URL'),
                Tables\Columns\TextColumn::make('language')->label('Language'),
                Tables\Columns\BooleanColumn::make('is_active')->label('Active'),
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
            'index' => Pages\ListRecommendedChannels::route('/'),
            'create' => Pages\CreateRecommendedChannel::route('/create'),
            'edit' => Pages\EditRecommendedChannel::route('/{record}/edit'),
        ];
    }
}
