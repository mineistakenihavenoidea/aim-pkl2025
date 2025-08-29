<?php

namespace App\Filament\Resources\SambutanKepalaResource\Pages;

use App\Filament\Resources\SambutanKepalaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSambutanKepalas extends ListRecords
{
    protected static string $resource = SambutanKepalaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
