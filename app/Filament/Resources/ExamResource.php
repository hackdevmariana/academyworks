<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamResource\Pages;
use App\Filament\Resources\ExamResource\RelationManagers;
use App\Models\Exam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamResource extends Resource
{
    protected static ?string $model = Exam::class;
    protected static ?string $navigationGroup = 'Academic content';

    protected static ?string $navigationIcon = 'healthicons-f-i-exam-multiple-choice';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique('exams', 'slug', ignoreRecord: true)
                    ->maxLength(255),

                Forms\Components\Textarea::make('question')
                    ->label('Question')
                    ->required(),

                Forms\Components\TextInput::make('answer_1')
                    ->label('Answer 1')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('answer_2')
                    ->label('Answer 2')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('answer_3')
                    ->label('Answer 3')
                    ->nullable()
                    ->maxLength(255),

                Forms\Components\TextInput::make('answer_4')
                    ->label('Answer 4')
                    ->nullable()
                    ->maxLength(255),

                Forms\Components\TextInput::make('correct_answer')
                    ->label('Correct Answer')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('explanation')
                    ->label('Explanation')
                    ->nullable(),

                Forms\Components\Select::make('lesson_id')
                    ->relationship('lesson', 'title')
                    ->label('Lesson')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('lesson.title')
                    ->label('Lesson')
                    ->sortable(),

                Tables\Columns\TextColumn::make('correct_answer')
                    ->label('Correct Answer')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d/m/Y'),
            ])
            ->filters([])
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
            'index' => Pages\ListExams::route('/'),
            'create' => Pages\CreateExam::route('/create'),
            'edit' => Pages\EditExam::route('/{record}/edit'),
        ];
    }
}
