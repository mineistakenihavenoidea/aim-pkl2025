<?php

namespace App\Filament\Resources\PenyediaanBenihResource\Pages;

use App\Filament\Resources\PenyediaanBenihResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyediaanBenih extends EditRecord
{
    protected static string $resource = PenyediaanBenihResource::class;

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
