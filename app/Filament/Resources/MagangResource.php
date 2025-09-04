<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MagangResource\Pages;
use App\Filament\Resources\MagangResource\RelationManagers;
use App\Models\Magang;
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
use Filament\Forms\Components\DatePicker;

class MagangResource extends Resource
{
    protected static ?string $model = Magang::class;

    protected static ?string $navigationGroup = 'Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                grid::make(3)
                ->schema([
                    TextInput::make('lembaga')
                    ->required()
                    ->columnspan(1),
                    TextInput::make('jumlah_orang')
                    ->numeric()
                    ->required()
                    ->columnspan(1),
                ]),
                grid::make(3)
                ->schema([
                    DatePicker::make('mulai')
                    ->required()
                    ->native(false)           // minute increments
                    ->displayFormat('d F Y')
                    ->columnspan(1),
                    DatePicker::make('selesai')
                    ->required()
                    ->native(false)
                    ->columnspan(1)           // minute increments
                    ->displayFormat('d F Y'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('lembaga')
                ->sortable(),
                TextColumn::make('jumlah_orang')
                ->sortable(),
                TextColumn::make('mulai')
                ->date('d F Y')
                ->sortable(),
                TextColumn::make('selesai')
                ->date('d F Y')
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
            'index' => Pages\ListMagangs::route('/'),
            'create' => Pages\CreateMagang::route('/create'),
            'edit' => Pages\EditMagang::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Magang';
    }

    public static function getModelLabel(): string
    {
        return 'Magang';
    }
}
