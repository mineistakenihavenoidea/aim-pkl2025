<?php

namespace App\Filament\Resources\SambutanKepalaResource\Pages;

use App\Filament\Resources\SambutanKepalaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSambutanKepala extends CreateRecord
{
    protected static string $resource = SambutanKepalaResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect back to the agenda list after editing
        return $this->getResource()::getUrl('index');
    }
}
