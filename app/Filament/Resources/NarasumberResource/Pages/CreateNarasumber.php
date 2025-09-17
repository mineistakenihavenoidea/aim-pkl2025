<?php

namespace App\Filament\Resources\NarasumberResource\Pages;

use App\Filament\Resources\NarasumberResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNarasumber extends CreateRecord
{
    protected static string $resource = NarasumberResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect back to the agenda list after editing
        return $this->getResource()::getUrl('index');
    }
}
