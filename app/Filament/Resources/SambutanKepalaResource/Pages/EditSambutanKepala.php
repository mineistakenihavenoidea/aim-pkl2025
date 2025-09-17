<?php

namespace App\Filament\Resources\SambutanKepalaResource\Pages;

use App\Filament\Resources\SambutanKepalaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSambutanKepala extends EditRecord
{
    protected static string $resource = SambutanKepalaResource::class;

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
