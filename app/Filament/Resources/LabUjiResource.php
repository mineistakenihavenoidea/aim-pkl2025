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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                ->required(),
                FileUpload::make('gambar')
                ->directory('uploads/labuji')
                ->disk('public')
                ->required(),
                RichEditor::make('deskripsi')
                ->required()
                ->columnSpanFull(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul'),
                ImageColumn::make('gambar'),
                TextColumn::make('deskripsi')
                ->html(),
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
