<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialProfileResource\Pages;
use App\Models\SocialProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

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
                Forms\Components\Select::make('owner_type')
                    ->label('Owner Type')
                    ->required()
                    ->options([
                        'App\\Models\\Speaker' => 'Speaker',
                        'App\\Models\\Place' => 'Place',
                        // Agrega otros modelos aquí si es necesario
                    ])
                    ->searchable()
                    ->reactive()
                    ->afterStateUpdated(fn (callable $set) => $set('owner_id', null)),
                Forms\Components\Select::make('owner_id')
                    ->label('Owner')
                    ->required()
                    ->options(function (callable $get) {
                        $ownerType = $get('owner_type');
                        if (!$ownerType) {
                            return [];
                        }
                        return $ownerType::query()->pluck('name', 'id');
                    })
                    ->searchable()
                    ->reactive()
                    ->placeholder('Select an owner after choosing a type'),
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
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('text')
                    ->label('Description')
                    ->limit(50),
                Tables\Columns\TextColumn::make('owner_type')
                    ->label('Owner Type')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('owner.name') // Relación polimórfica
                    ->label('Owner Name')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([])
            ->defaultSort('socialnetwork');
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