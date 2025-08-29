<?php

namespace App\Filament\Resources\LabUjiResource\Pages;

use App\Filament\Resources\LabUjiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLabUji extends EditRecord
{
    protected static string $resource = LabUjiResource::class;

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
