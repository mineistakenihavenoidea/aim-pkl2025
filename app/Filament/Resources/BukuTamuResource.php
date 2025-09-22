<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuTamuResource\Pages;
use App\Filament\Resources\BukuTamuResource\RelationManagers;
use App\Models\BukuTamu;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;



class BukuTamuResource extends Resource
{
    protected static ?string $model = BukuTamu::class;

    protected static ?string $navigationGroup = 'Interaksi';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(3)
            ->schema([
                TextInput::make('nama')
                ->required()
                ->columnspan(1),
                Textinput::make('nomor')
                ->numeric()
                ->columnspan(1),
                select::make('pekerjaan')
                ->options([
                'Petani' => 'Petani',
                'Peneliti' => 'Peneliti',
                'Penyuluh' => 'Penyuluh',
                'ASN' => 'ASN',
                'Dosen' => 'Dosen',
                'Guru' => 'Guru',
                'Mahasiswa' => 'Mahasiswa',
                'Pelajar' => 'Pelajar',
                'Swasta' => 'Swasta',
                'Umum' => 'Umum',
                ]),
                textinput::make('instansi'),
                select::make('layanan')
                ->options([
                'Konsultasi' => 'Konsultasi',
                'Penyediaan Benih Sumber' => 'Peneliti',
                'Laboratorium Pengujian' => 'Laboratorium Pengujian',
                'Perpustakaan' => 'Perpustakaan',
                'Lain-lain' => 'Lain-lain',
                ]),
                Select::make('pegawai')
                ->options(Pegawai::pluck('nama', 'nama'))
                ->label('Jabatan')
                ->preload()
                ->columnSpan(1),
                textinput::make('tujuan'),
                textinput::make('topik'),


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
                TextColumn::make('nomor')
                ->sortable()
                ->searchable(),
                textcolumn::make('pekerjaan')
                ->sortable()
                ->searchable(),
                textcolumn::make('instansi')
                ->sortable()
                ->searchable(),
                textcolumn::make('layanan')
                ->sortable()
                ->searchable(),
                TextColumn::make('pegawai')
                ->label('Pegawai')
                ->sortable()
                ->searchable(),
                textcolumn::make('tujuan')
                ->sortable()
                ->searchable(),
                textcolumn::make('topik')
                ->sortable()
                ->searchable(),
                TextColumn::make('created_at')
                ->label('tanggal')
                ->dateTime('d F Y')
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
            'index' => Pages\ListBukuTamus::route('/'),
            'create' => Pages\CreateBukuTamu::route('/create'),
            'edit' => Pages\EditBukuTamu::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Buku Tamu';
    }

    public static function getModelLabel(): string
    {
        return 'Buku tamu';
    }
}
