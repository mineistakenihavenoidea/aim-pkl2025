<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Filament\Resources\FeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Mokhosh\FilamentRating\Components\Rating;
use Mokhosh\FilamentRating\Columns\RatingColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationGroup = 'Interaksi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(3)
            ->schema([
                TextInput::make('nama')
                ->required()
                ->columnspan(1),
                Rating::make('rating') // Use half-star theme
                ->stars(5)
                ->color('primary')
                ->required()
                ->columnspan(1),
                Textarea::make('feedback')
                ->autosize()
                ->columnspan(2),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                ->sortable()
                ->searchable(),
                RatingColumn::make('rating')
                ->stars(5)
                ->sortable(),
                TextColumn::make('feedback')
                ->sortable()
                ->searchable(),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make()
                ->requiresConfirmation()
                ->modalHeading('Hapus Data')
                ->modalSubheading('Yakin ingin menghapus data ini?')
                ->modalButton('Ya'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFeedback::route('/'),
            'create' => Pages\CreateFeedback::route('/create'),
            'edit' => Pages\EditFeedback::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Feedback';
    }

    public static function getModelLabel(): string
    {
        return 'Feedback';
    }
}
