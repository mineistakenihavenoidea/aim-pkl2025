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
        return BukuTamu::query()->latest()->take(5);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('nama')
                ->sortable()
                ->label('Nama'),
            TextColumn::make('nomor')
                ->label('Nomor')
                ->sortable(),
            TextColumn::make('pekerjaan')
                ->label('Pekerjaan')
                ->sortable(),
            TextColumn::make('instansi')
                ->label('Instansi')
                ->sortable(),
            TextColumn::make('layanan')
                ->label('Layanan')
                ->sortable(),
            TextColumn::make('pegawai.nama')
                ->label('Pegawai')
                ->sortable(),
            TextColumn::make('tujuan')
                ->label('Tujuan')
                ->sortable(),
            TextColumn::make('topik')
                ->label('Topik')
                ->sortable(),
            TextColumn::make('created_at')
                ->label('Tanggal')
                ->dateTime('d F Y')
                ->sortable(),
        ];
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
