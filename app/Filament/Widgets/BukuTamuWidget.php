<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use App\Models\BukuTamu;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;

class BukuTamuWidget extends BaseWidget
{
    protected static string $view = 'filament.widgets.bukutamu-widget'; // point to your custom blade view

    protected function getTableQuery(): Builder
    {
        return BukuTamu::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('nama')
                ->label('Nama'),
            TextColumn::make('nomor'),
            TextColumn::make('pekerjaan'),
            TextColumn::make('instansi'),
            TextColumn::make('layanan'),
            TextColumn::make('pegawai.nama')
                ->label('Pegawai')
                ->sortable()
                ->searchable(),
            TextColumn::make('tujuan'),
            TextColumn::make('topik'),
            TextColumn::make('created_at'),
        ];
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
