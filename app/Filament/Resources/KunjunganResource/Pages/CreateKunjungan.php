<?php

namespace App\Filament\Resources\KunjunganResource\Pages;

use App\Filament\Resources\KunjunganResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKunjungan extends CreateRecord
{
    protected static string $resource = KunjunganResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect back to the agenda list after editing
        return $this->getResource()::getUrl('index');
    }
}
