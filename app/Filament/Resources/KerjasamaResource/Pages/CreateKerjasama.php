<?php

namespace App\Filament\Resources\KerjasamaResource\Pages;

use App\Filament\Resources\KerjasamaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKerjasama extends CreateRecord
{
    protected static string $resource = KerjasamaResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect back to the agenda list after editing
        return $this->getResource()::getUrl('index');
    }
}
