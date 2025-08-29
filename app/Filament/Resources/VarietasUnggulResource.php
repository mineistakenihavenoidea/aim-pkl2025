<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VarietasUnggulResource\Pages;
use App\Filament\Resources\VarietasUnggulResource\RelationManagers;
use App\Models\VarietasUnggul;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class VarietasUnggulResource extends Resource
{
    protected static ?string $model = VarietasUnggul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Produk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_varietas')
                ->required(),
                FileUpload::make('gambar')
                ->required()
                ->directory('uploads/')
                ->disk('public') ,
                TextInput::make('informasi'),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_varietas')
                ->sortable(),
                ImageColumn::make('gambar')
                ->sortable(),
                TextColumn::make('informasi')
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
            'index' => Pages\ListVarietasUngguls::route('/'),
            'create' => Pages\CreateVarietasUnggul::route('/create'),
            'edit' => Pages\EditVarietasUnggul::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Varietas Unggul';
    }

    public static function getModelLabel(): string
    {
        return 'Varietas Unggul';
    }
}
