<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriKegiatanResource\Pages;
use App\Filament\Resources\GaleriKegiatanResource\RelationManagers;
use App\Models\GaleriKegiatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Grid;

class GaleriKegiatanResource extends Resource
{
    protected static ?string $model = GaleriKegiatan::class;

    protected static ?string $navigationGroup = 'Berita Kegiatan';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Grid::make(2)
            ->schema([
                TextInput::make('judul')
                ->required(),

                FileUpload::make('gambar')
                ->multiple()
                ->directory('uploads/galeri kegiatan')
                ->disk('public') // super important
                ->saveRelationshipsUsing(function ($record, $state) {
                    foreach ($state as $file) {
                        $record->media()->create([
                            'file_path' => $file,
                            'media_type' => 'image',
                        ]);
                    }
                })
            ]),

            RichEditor::make('info')
            ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
    return $table
        ->columns([
            TextColumn::make('judul')->searchable(),
            TextColumn::make('info')->limit(120)->html(),

            // Pulls from the accessor above
            ImageColumn::make('cover_path')
                ->label('Gambar')
                ->disk('public')   // uses storage/app/public
                ->square()
                ->size(100),
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
            RelationManagers\MediaRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGaleriKegiatans::route('/'),
            'create' => Pages\CreateGaleriKegiatan::route('/create'),
            'edit' => Pages\EditGaleriKegiatan::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Galeri Kegiatan';
    }

    public static function getModelLabel(): string
    {
        return 'Galeri Kegiatan';
    }
}
