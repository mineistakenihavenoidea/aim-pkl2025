<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NarasumberResource\Pages;
use App\Filament\Resources\NarasumberResource\RelationManagers;
use App\Models\Narasumber;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class NarasumberResource extends Resource
{
    protected static ?string $model = Narasumber::class;

    protected static ?string $navigationGroup = 'Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                ->sortable()
                ->searchable(),
                TextInput::make('asal')
                ->sortable()
                ->searchable()
                ->label('Info'),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                ->sortable(),
                TextColumn::make('asal')
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
            'index' => Pages\ListNarasumbers::route('/'),
            'create' => Pages\CreateNarasumber::route('/create'),
            'edit' => Pages\EditNarasumber::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Narasumber';
    }

    public static function getModelLabel(): string
    {
        return 'Narasumber';
    }
}
