<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormPertanyaanResource\Pages;
use App\Filament\Resources\FormPertanyaanResource\RelationManagers;
use App\Models\FormPertanyaan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class FormPertanyaanResource extends Resource
{
    protected static ?string $model = FormPertanyaan::class;

    protected static ?string $navigationGroup = 'Interaksi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(3)
                ->schema([
                    TextInput::make('nama')
                    ->required()
                    ->columnspan(2),
                    TextInput::make('kontak')
                    ->required()
                    ->columnspan(2),
                    TextInput::make('subjek')
                    ->required()
                    ->columnspan(2),
                    Textarea::make('pertanyaan')
                    ->required()
                    ->columnspan(2),
                //
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
            TextColumn::make('kontak')
                ->sortable()
                ->searchable(),
            TextColumn::make('pertanyaan')
                ->sortable()
                ->searchable(),
            TextColumn::make('subjek')
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
            'index' => Pages\ListFormPertanyaans::route('/'),
            'create' => Pages\CreateFormPertanyaan::route('/create'),
            'edit' => Pages\EditFormPertanyaan::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Form Pertanyaan';
    }

    public static function getModelLabel(): string
    {
        return 'Form Pertanyaan';
    }
}
