<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialProfileResource\Pages;
use App\Filament\Resources\SocialProfileResource\RelationManagers;
use App\Models\SocialProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialProfileResource extends Resource
{
    protected static ?string $model = SocialProfile::class;
    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $navigationIcon = 'ionicon-share-social-outline';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('socialnetwork')
                    ->label('Social Network')
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->label('URL')
                    ->url()
                    ->nullable(),
                Forms\Components\Textarea::make('text')
                    ->label('Description')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('socialnetwork')
                    ->label('Social Network')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('url')
                    ->label('URL')
                    ->url(fn($record) => $record->url)
                    ->searchable(),                
                Tables\Columns\TextColumn::make('text')
                    ->label('Description')
                    ->limit(50),
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
            'index' => Pages\ListSocialProfiles::route('/'),
            'create' => Pages\CreateSocialProfile::route('/create'),
            'edit' => Pages\EditSocialProfile::route('/{record}/edit'),
        ];
    }
}
