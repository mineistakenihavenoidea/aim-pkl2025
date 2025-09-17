<?php

namespace App\Filament\Resources\MagangResource\Pages;

use App\Filament\Resources\MagangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMagang extends EditRecord
{
    protected static string $resource = MagangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        // Redirect back to the agenda list after editing
        return $this->getResource()::getUrl('index');
    }
}
