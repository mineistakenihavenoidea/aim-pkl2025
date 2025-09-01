<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
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

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

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
                ->directory('uploads/berita')
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

            RichEditor::make('konten')
            ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
    return $table
        ->columns([
            TextColumn::make('judul')
                ->searchable()
                ->sortable()
                ->wrap()
                ->limit(100),
            TextColumn::make('konten')
                ->limit(100)
                ->html()
                ->sortable()
                ->wrap(),

            // Pulls from the accessor above
            ImageColumn::make('cover_path')
                ->label('Cover')
                ->disk('public')   // uses storage/app/public
                ->square()
                ->size(100)
                ->sortable(),
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Berita';
    }

    public static function getModelLabel(): string
    {
        return 'Berita';
    }
}
