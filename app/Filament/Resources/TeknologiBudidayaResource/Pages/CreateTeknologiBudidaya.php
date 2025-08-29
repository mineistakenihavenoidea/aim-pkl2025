<?php

namespace App\Filament\Resources\TeknologiBudidayaResource\Pages;

use App\Filament\Resources\TeknologiBudidayaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeknologiBudidaya extends CreateRecord
{
    protected static string $resource = TeknologiBudidayaResource::class;

    protected function getRedirectUrl(): string
    {
        // Redirect back to the agenda list after editing
        return $this->getResource()::getUrl('index');
    }
}
