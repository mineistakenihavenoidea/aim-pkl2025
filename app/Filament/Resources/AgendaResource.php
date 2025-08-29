<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgendaResource\Pages;
use App\Filament\Resources\AgendaResource\RelationManagers;
use App\Models\Agenda;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Grid;


class AgendaResource extends Resource
{
    protected static ?string $model = Agenda::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $navigationGroup = 'Berita Kegiatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_agenda')
                ->required(),

                DateTimePicker::make('tanggal/jam')
                ->label('Tanggal/Jam Acara')
                ->required()
                ->native(false)          // use Flatpickr instead of browser picker
                ->withoutSeconds()       // hide seconds
                ->minutesStep(15)        // minute increments
                ->displayFormat('d F Y H:i'), // Monday start,
                Textarea::make('lokasi')
                ->required(),
                Textarea::make('keterangan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_agenda')
                ->sortable()
                ->searchable(),
                TextColumn::make('lokasi')
                ->limit(50)
                ->sortable()
                ->searchable(),
                TextColumn::make('tanggal/jam')
                ->dateTime('d F Y H:i')
                ->sortable()
                ->searchable(),
                TextColumn::make('keterangan')
                ->limit(50)
                ->sortable()
                ->searchable(),
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
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAgendas::route('/'),
            'create' => Pages\CreateAgenda::route('/create'),
            'edit' => Pages\EditAgenda::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Agenda';
    }

    public static function getModelLabel(): string
    {
        return 'Agenda';
    }

}
