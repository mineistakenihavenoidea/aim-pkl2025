<?php

namespace App\Filament\Resources\VarietasUnggulResource\Pages;

use App\Filament\Resources\VarietasUnggulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVarietasUngguls extends ListRecords
{
    protected static string $resource = VarietasUnggulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
