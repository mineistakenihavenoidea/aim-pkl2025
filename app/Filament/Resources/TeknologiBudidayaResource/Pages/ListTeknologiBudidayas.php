<?php

namespace App\Filament\Resources\TeknologiBudidayaResource\Pages;

use App\Filament\Resources\TeknologiBudidayaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeknologiBudidayas extends ListRecords
{
    protected static string $resource = TeknologiBudidayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
