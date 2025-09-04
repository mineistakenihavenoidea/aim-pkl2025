<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenyediaanBenihResource\Pages;
use App\Filament\Resources\PenyediaanBenihResource\RelationManagers;
use App\Models\PenyediaanBenih;
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
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class PenyediaanBenihResource extends Resource
{
    protected static ?string $model = PenyediaanBenih::class;

    protected static ?string $navigationGroup = 'Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                grid::make(3)
                ->schema([
                    TextInput::make('nama')
                    ->required()
                    ->columnspan(1),
                    TextInput::make('stok')
                    ->required()
                    ->numeric()
                    ->columnspan(1),
                    Textarea::make('keterangan')
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
                ->sortable(),
                TextColumn::make('stok')
                ->sortable(),
                TextColumn::make('keterangan')
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
            'index' => Pages\ListPenyediaanBenihs::route('/'),
            'create' => Pages\CreatePenyediaanBenih::route('/create'),
            'edit' => Pages\EditPenyediaanBenih::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Penyediaan Benih';
    }

    public static function getModelLabel(): string
    {
        return 'Penyediaan Benih';
    }
}
