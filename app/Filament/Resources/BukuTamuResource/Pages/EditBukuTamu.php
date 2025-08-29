<?php

namespace App\Filament\Resources\BukuTamuResource\Pages;

use App\Filament\Resources\BukuTamuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBukuTamu extends EditRecord
{
    protected static string $resource = BukuTamuResource::class;

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
