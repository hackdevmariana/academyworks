<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpeakerResource\Pages;
use App\Filament\Resources\SpeakerResource\RelationManagers;
use App\Models\Speaker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SpeakerResource extends Resource
{
    protected static ?string $model = Speaker::class;
    protected static ?string $navigationGroup = 'Academic content';

    protected static ?string $navigationIcon = 'gameicon-teacher';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('surname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('biography')
                    ->maxLength(65535),
                Forms\Components\Repeater::make('socialProfiles')
                    ->relationship('socialProfiles')
                    ->schema([
                        Forms\Components\Select::make('socialnetwork')
                            ->options([
                                'twitter' => 'Twitter',
                                'instagram' => 'Instagram',
                                'linkedin' => 'LinkedIn',
                                'youtube' => 'YouTube',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('url')
                            ->url()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('text')
                            ->maxLength(255),
                    ]),
                Forms\Components\BelongsToManyMultiSelect::make('videos')
                    ->relationship('videos', 'title'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('surname')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('biography')->limit(50),
                Tables\Columns\BadgeColumn::make('socialProfiles_count')
                    ->label('Social Profiles')
                    ->counts('socialProfiles')
                    ->colors([
                        'primary',
                    ]),
                Tables\Columns\BadgeColumn::make('videos_count')
                    ->label('Videos')
                    ->counts('videos')
                    ->colors([
                        'success',
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
            'index' => Pages\ListSpeakers::route('/'),
            'create' => Pages\CreateSpeaker::route('/create'),
            'edit' => Pages\EditSpeaker::route('/{record}/edit'),
        ];
    }
}
