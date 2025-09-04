<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeknologiBudidayaResource\Pages;
use App\Filament\Resources\TeknologiBudidayaResource\RelationManagers;
use App\Models\TeknologiBudidaya;
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
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class TeknologiBudidayaResource extends Resource
{
    protected static ?string $model = TeknologiBudidaya::class;

    protected static ?string $navigationGroup = 'Produk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                grid::make(3)
                ->schema([
                    TextInput::make('nama_tanaman')
                    ->required()
                    ->label('Judul')
                    ->columnspan(2),
                    Textarea::make('budidaya')
                    ->columnspan(2)
                    ->label('Informasi'),
                //
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_tanaman'),
                TextColumn::make('budidaya')
                ->label('Teknologi Budidaya'),
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
            'index' => Pages\ListTeknologiBudidayas::route('/'),
            'create' => Pages\CreateTeknologiBudidaya::route('/create'),
            'edit' => Pages\EditTeknologiBudidaya::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Teknologi Budidaya';
    }

    public static function getModelLabel(): string
    {
        return 'Teknologi Budidaya';
    }
}
