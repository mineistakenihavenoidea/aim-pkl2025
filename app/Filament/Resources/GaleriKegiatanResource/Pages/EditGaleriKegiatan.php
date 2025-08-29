<?php

namespace App\Filament\Resources\GaleriKegiatanResource\Pages;

use App\Filament\Resources\GaleriKegiatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGaleriKegiatan extends EditRecord
{
    protected static string $resource = GaleriKegiatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        // Redirect back to the resource list after creation
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array{
        $data['user_id'] = auth()->id();
        return $data;
    }
}
