<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SambutanKepalaResource\Pages;
use App\Filament\Resources\SambutanKepalaResource\RelationManagers;
use App\Models\SambutanKepala;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class SambutanKepalaResource extends Resource
{
    protected static ?string $model = SambutanKepala::class;

    protected static ?string $navigationGroup = 'Profil';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                ->required(),
                FileUpload::make('gambar')
                ->directory('uploads/')
                ->disk('public')
                ->required(),
                RichEditor::make('konten')
                ->required()
                ->columnSpan('full'),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                ->sortable()
                ->searchable(),
                TextColumn::make('konten')
                ->html()
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambar')
                ->size(100),
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
            'index' => Pages\ListSambutanKepalas::route('/'),
            'create' => Pages\CreateSambutanKepala::route('/create'),
            'edit' => Pages\EditSambutanKepala::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Sambutan Kepala';
    }

    public static function getModelLabel(): string
    {
        return 'Sambutan Kepala';
    }
}
