<?php

namespace App\Filament\Resources\FormPertanyaanResource\Pages;

use App\Filament\Resources\FormPertanyaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormPertanyaan extends EditRecord
{
    protected static string $resource = FormPertanyaanResource::class;

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
