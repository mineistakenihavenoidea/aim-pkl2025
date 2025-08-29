<?php

namespace App\Filament\Resources\StrukturResource\Pages;

use App\Filament\Resources\StrukturResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStruktur extends CreateRecord
{
    protected static string $resource = StrukturResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect back to the agenda list after editing
        return $this->getResource()::getUrl('index');
    }
}
