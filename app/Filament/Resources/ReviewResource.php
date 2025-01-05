<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;
    protected static ?string $navigationGroup = 'Academic content';

    protected static ?string $navigationIcon = 'gmdi-rate-review-o';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('student_id')
                    ->relationship('student', 'name')
                    ->required()
                    ->label('Student'),

                Forms\Components\Select::make('reviewable_type')
                    ->options([
                        'App\Models\Book' => 'Book',
                        'App\Models\Author' => 'Author',
                        'App\Models\Reading' => 'Reading',
                        'App\Models\ReadingPart' => 'Reading Part',
                    ])
                    ->required()
                    ->label('Type of Review'),

                Forms\Components\TextInput::make('reviewable_id')
                    ->required()
                    ->label('Entity ID'),

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('content')
                    ->required(),

                Forms\Components\TextInput::make('rating')
                    ->numeric()
                    ->min(1)
                    ->max(5)
                    ->required()
                    ->label('Rating'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student.name')
                    ->label('Student')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('reviewable_type')
                    ->label('Type'),

                Tables\Columns\TextColumn::make('reviewable_id')
                    ->label('Entity ID'),

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('rating')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('reviewable_type')
                    ->options([
                        'App\Models\Book' => 'Book',
                        'App\Models\Author' => 'Author',
                        'App\Models\Reading' => 'Reading',
                        'App\Models\ReadingPart' => 'Reading Part',
                    ])
                    ->label('Type'),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
