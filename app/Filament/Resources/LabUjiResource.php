<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LabUjiResource\Pages;
use App\Filament\Resources\LabUjiResource\RelationManagers;
use App\Models\LabUji;
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

class LabUjiResource extends Resource
{
    protected static ?string $model = LabUji::class;

    protected static ?string $navigationGroup = 'Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                grid::make(3)
                ->schema([
                    TextInput::make('judul')
                    ->required()
                    ->columnspan(1),
                    FileUpload::make('gambar')
                    ->directory('uploads/labuji')
                    ->disk('public')
                    ->columnspan(1),
                    RichEditor::make('deskripsi')
                    ->columnSpanfull(),
            ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                ->sortable()
                ->searchable(),
                ImageColumn::make('gambar'),
                TextColumn::make('deskripsi')
                ->sortable()
                ->searchable()
                ->html()
                ->wrap()
                ->limit(100),
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
            'index' => Pages\ListLabUjis::route('/'),
            'create' => Pages\CreateLabUji::route('/create'),
            'edit' => Pages\EditLabUji::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Lab Uji';
    }

    public static function getModelLabel(): string
    {
        return 'Lab Uji';
    }
}
