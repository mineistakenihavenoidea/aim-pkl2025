<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfografisResource\Pages;
use App\Filament\Resources\InfografisResource\RelationManagers;
use App\Models\Infografis;
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

class InfografisResource extends Resource
{
    protected static ?string $model = Infografis::class;

    protected static ?string $navigationGroup = 'Produk';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Grid::make(3)
            ->schema([
                TextInput::make('judul')
                ->required()
                ->columnspan(2),
                FileUpload::make('gambar')
                ->multiple()
                ->columnspan(2)
                ->directory('uploads/infografis')
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
        ]);
    }

    public static function table(Table $table): Table
    {
    return $table
        ->columns([
            TextColumn::make('judul')
                ->searchable()
                ->sortable(),

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
            'index' => Pages\ListInfografis::route('/'),
            'create' => Pages\CreateInfografis::route('/create'),
            'edit' => Pages\EditInfografis::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Galeri/Infografis';
    }

    public static function getModelLabel(): string
    {
        return 'Galeri/Infografis';
    }
}
