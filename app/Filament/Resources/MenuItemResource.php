<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuItemResource\Pages;
use App\Filament\Resources\MenuItemResource\RelationManagers;
use App\Models\MenuItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuItemResource extends Resource
{
    protected static ?string $model = MenuItem::class;

    protected static ?string $navigationIcon = 'eva-menu-2-outline';
    protected static ?string $navigationGroup = 'Menus';


    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('menu_id')
                ->relationship('menu', 'name')
                ->required(),
            Forms\Components\Select::make('parent_id')
                ->label('Parent Item')
                ->relationship('parent', 'title'),
            Forms\Components\TextInput::make('title')->required(),
            Forms\Components\TextInput::make('slug')->disabled(),
            Forms\Components\TextInput::make('url')->url(),
            Forms\Components\TextInput::make('order')->numeric()->default(0),
            Forms\Components\Toggle::make('is_active')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('menu.name')->label('Menu'),
            Tables\Columns\TextColumn::make('title')->searchable(),
            Tables\Columns\TextColumn::make('slug'),
            Tables\Columns\TextColumn::make('order')->sortable(),
            Tables\Columns\BooleanColumn::make('is_active'),
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
            'index' => Pages\ListMenuItems::route('/'),
            'create' => Pages\CreateMenuItem::route('/create'),
            'edit' => Pages\EditMenuItem::route('/{record}/edit'),
        ];
    }
}
