<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Filament\Resources\FaqResource\RelationManagers;
use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Grid;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationGroup = 'Interaksi';

    public static function form(Form $form): Form
{
    return $form->schema([
        Grid::make(3)
            ->schema([
                TextInput::make('pertanyaan')
                    ->label('Pertanyaan')
                    ->required()
                    ->columnSpan(2), // only 1 column wide, but Grid will force it as a row
                TextInput::make('jawaban')
                    ->label('Jawaban')
                    ->required()
                    ->columnSpan(2), // same thing here
            ]), // treat it like rows
    ]);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('pertanyaan')
                ->sortable(),
            TextColumn::make('jawaban')
                ->limit(255)
                ->sortable(),
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Faq';
    }

    public static function getModelLabel(): string
    {
        return 'Faq';
    }
}
