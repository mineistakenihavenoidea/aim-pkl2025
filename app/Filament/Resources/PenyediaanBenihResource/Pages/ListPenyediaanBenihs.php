<?php

namespace App\Filament\Resources\PenyediaanBenihResource\Pages;

use App\Filament\Resources\PenyediaanBenihResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenyediaanBenihs extends ListRecords
{
    protected static string $resource = PenyediaanBenihResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
