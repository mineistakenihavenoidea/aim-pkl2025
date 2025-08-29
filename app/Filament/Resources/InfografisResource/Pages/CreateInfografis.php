<?php

namespace App\Filament\Resources\InfografisResource\Pages;

use App\Filament\Resources\InfografisResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateInfografis extends CreateRecord
{
    protected static string $resource = InfografisResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect back to the agenda list after editing
        return $this->getResource()::getUrl('index');
    }
}
