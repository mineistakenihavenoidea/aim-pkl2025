<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use App\Models\BukuTamu;
use Illuminate\Database\Eloquent\Builder;

class BukuTamuWidget extends BaseWidget
{
//    public function getHeading(): string
//    {
//        return 'Daftar Buku Tamu'; // widget/card title
//    }

    protected function getTableHeading(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return new \Illuminate\Support\HtmlString(
            '<a href="' . \App\Filament\Resources\BukuTamuResource::getUrl('index') . '" class="text-lg font-bold mb-3 underline">
                Buku Tamu
            </a>'
        );
    }


    protected function getTableQuery(): Builder
    {
        return BukuTamu::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama')->label('Nama'),
            Tables\Columns\TextColumn::make('keperluan')->label('Keperluan'),
            Tables\Columns\TextColumn::make('tanggal')->date('d M Y'),
        ];
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
