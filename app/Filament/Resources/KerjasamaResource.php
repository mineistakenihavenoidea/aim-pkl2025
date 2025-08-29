<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KerjasamaResource\Pages;
use App\Filament\Resources\KerjasamaResource\RelationManagers;
use App\Models\Kerjasama;
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
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class KerjasamaResource extends Resource
{
    protected static ?string $model = Kerjasama::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                ->required(),
                TextInput::make('lembaga')
                ->required(),
                TextInput::make('jenis')
                ->label('jenis kerjasama')
                ->required(),
                DatePicker::make('mulai')
                ->label('mulai')
                ->native(false)          // use Flatpickr instead of browser picker
                ->withoutSeconds()       // hide seconds
                ->minutesStep(15)        // minute increments
                ->displayFormat('d F Y')// Monday start,
                ->required(),
                DatePicker::make('selesai')
                ->label('selesai')
                ->required()
                ->native(false)          // use Flatpickr instead of browser picker
                ->withoutSeconds()       // hide seconds
                ->minutesStep(15)        // minute increments
                ->displayFormat('d F Y'), // Monday start,
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
                TextColumn::make('lembaga')
                ->sortable()
                ->searchable(),
                TextColumn::make('jenis')
                ->sortable()
                ->searchable(),
                TextColumn::make('mulai')
                ->date()
                ->sortable()
                ->searchable(),
                TextColumn::make('selesai')
                ->date()
                ->sortable()
                ->searchable(),
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
            'index' => Pages\ListKerjasamas::route('/'),
            'create' => Pages\CreateKerjasama::route('/create'),
            'edit' => Pages\EditKerjasama::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Kerjasama';
    }

    public static function getModelLabel(): string
    {
        return 'Kerjasama';
    }
}
