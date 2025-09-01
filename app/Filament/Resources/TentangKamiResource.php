<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TentangKamiResource\Pages;
use App\Filament\Resources\TentangKamiResource\RelationManagers;
use App\Models\TentangKami;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;

class TentangKamiResource extends Resource
{
    protected static ?string $model = TentangKami::class;

    protected static ?string $navigationGroup = 'Profil';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('konten')
                ->required()
                ->columnSpan('full'),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('konten')
                ->label('')
                ->html()
                ->wrap(),
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
            'index' => Pages\ListTentangKamis::route('/'),
            'create' => Pages\CreateTentangKami::route('/create'),
            'edit' => Pages\EditTentangKami::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): ?string
    {
        return 'Tentang Kami';
    }

    public static function getModelLabel(): string
    {
        return 'Tentang Kami';
    }
}
