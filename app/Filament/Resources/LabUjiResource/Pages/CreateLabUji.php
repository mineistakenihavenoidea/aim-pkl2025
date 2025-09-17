<?php

namespace App\Filament\Resources\LabUjiResource\Pages;

use App\Filament\Resources\LabUjiResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLabUji extends CreateRecord
{
    protected static string $resource = LabUjiResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect back to the agenda list after editing
        return $this->getResource()::getUrl('index');
    }
}
