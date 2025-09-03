<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use App\Models\BukuTamu;
use Illuminate\Database\Eloquent\Builder;

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
