<?php

namespace App\Filament\Resources\LabUjiResource\Pages;

use App\Filament\Resources\LabUjiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLabUjis extends ListRecords
{
    protected static string $resource = LabUjiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
