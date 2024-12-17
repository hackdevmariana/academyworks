<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetaTagResource\Pages;
use App\Filament\Resources\MetaTagResource\RelationManagers;
use App\Models\MetaTag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class MetaTagResource extends Resource
{
    protected static ?string $model = MetaTag::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('route_name')
                    ->required()
                    ->unique(),
                Forms\Components\TextInput::make('title')->nullable(),
                Forms\Components\TextInput::make('charset')->default('utf-8'),
                Forms\Components\TextInput::make('lang')->default('en'),
                Forms\Components\TextInput::make('canonical')->nullable(),
                Forms\Components\Textarea::make('meta_description')->nullable(),
                Forms\Components\Textarea::make('meta_keywords')->nullable(),
                Forms\Components\TextInput::make('author')->nullable(),
                Forms\Components\TextInput::make('copyright')->nullable(),
                Forms\Components\TextInput::make('cache_control')->nullable(),
                Forms\Components\TextInput::make('expires')->nullable(),
                Forms\Components\TextInput::make('robots')->default('index, follow'),
                Forms\Components\TextInput::make('referrer')->default('origin'),
                Forms\Components\TextInput::make('og_title')->nullable(),
                Forms\Components\Textarea::make('og_description')->nullable(),
                Forms\Components\TextInput::make('og_image')->nullable(),
                Forms\Components\TextInput::make('og_type')->default('website'),
                Forms\Components\TextInput::make('og_url')->nullable(),
                Forms\Components\TextInput::make('og_site_name')->nullable(),
                Forms\Components\TextInput::make('og_locale')->default('en_US'),
                Forms\Components\TextInput::make('twitter_card')->default('summary'),
                Forms\Components\TextInput::make('twitter_title')->nullable(),
                Forms\Components\Textarea::make('twitter_description')->nullable(),
                Forms\Components\TextInput::make('twitter_image')->nullable(),
                Forms\Components\TextInput::make('twitter_site')->nullable(),
                Forms\Components\TextInput::make('twitter_creator')->nullable(),
                Forms\Components\TextInput::make('schema_name')->nullable(),
                Forms\Components\Textarea::make('schema_description')->nullable(),
                Forms\Components\TextInput::make('schema_image')->nullable(),
                Forms\Components\Textarea::make('additional_meta')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('route_name')->sortable()->searchable(),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('meta_description')->sortable()->searchable(),
                TextColumn::make('og_title')->sortable()->searchable(),
                TextColumn::make('twitter_title')->sortable()->searchable(),
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
            'index' => Pages\ListMetaTags::route('/'),
            'create' => Pages\CreateMetaTag::route('/create'),
            'edit' => Pages\EditMetaTag::route('/{record}/edit'),
        ];
    }
}
