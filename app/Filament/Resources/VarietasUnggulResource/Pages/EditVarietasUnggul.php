<?php

namespace App\Filament\Resources\VarietasUnggulResource\Pages;

use App\Filament\Resources\VarietasUnggulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVarietasUnggul extends EditRecord
{
    protected static string $resource = VarietasUnggulResource::class;

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
