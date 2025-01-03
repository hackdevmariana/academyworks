<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;
    protected static ?string $navigationGroup = 'Academic content';

    protected static ?string $navigationIcon = 'bi-book';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Title'),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(Book::class, 'slug')
                    ->maxLength(255)
                    ->label('Slug'),

                Forms\Components\Select::make('author_id')
                    ->relationship('author', 'name')
                    ->required()
                    ->label('Author'),

                Forms\Components\DatePicker::make('publication_date')
                    ->label('Publication Date'),

                Forms\Components\TextInput::make('language')
                    ->maxLength(50)
                    ->label('Language'),

                Forms\Components\TextInput::make('isbn')
                    ->maxLength(20)
                    ->label('ISBN'),

                Forms\Components\TextInput::make('pages')
                    ->numeric()
                    ->label('Pages'),

                Forms\Components\FileUpload::make('cover_image')
                    ->image()
                    ->label('Cover Image'),

                Forms\Components\Textarea::make('description')
                    ->maxLength(1000)
                    ->label('Description'),

                Forms\Components\TextInput::make('editorial')
                    ->maxLength(255)
                    ->label('Editorial'),

                Forms\Components\TextInput::make('link_to_buy')
                    ->url()
                    ->maxLength(255)
                    ->label('Link to Buy'),

                Forms\Components\Select::make('categories')
                    ->multiple()
                    ->relationship('categories', 'name')
                    ->label('Categories'),

                Forms\Components\Select::make('tags')
                    ->multiple()
                    ->relationship('tags', 'name')
                    ->label('Tags'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->label('Title'),

                Tables\Columns\TextColumn::make('author.name')
                    ->searchable()
                    ->sortable()
                    ->label('Author'),

                Tables\Columns\TextColumn::make('publication_date')
                    ->date()
                    ->sortable()
                    ->label('Publication Date'),

                Tables\Columns\TextColumn::make('isbn')
                    ->sortable()
                    ->label('ISBN'),

                Tables\Columns\TextColumn::make('categories.name')
                    ->label('Categories')
                    ->badge(),

                Tables\Columns\TextColumn::make('tags.name')
                    ->label('Tags')
                    ->badge(),

                Tables\Columns\ImageColumn::make('cover_image')
                    ->label('Cover Image'),
            ])
            ->filters([
                // Agrega filtros si son necesarios
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
