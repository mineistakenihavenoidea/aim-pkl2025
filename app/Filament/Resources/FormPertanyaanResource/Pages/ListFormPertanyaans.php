<?php

namespace App\Filament\Resources\FormPertanyaanResource\Pages;

use App\Filament\Resources\FormPertanyaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormPertanyaans extends ListRecords
{
    protected static string $resource = FormPertanyaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
