<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use App\Models\Kerjasama;
use Illuminate\Database\Eloquent\Builder;

class KerjasamaWidget extends BaseWidget
{
    // Make the widget span only 2 columns (like 2 StatsOverview cards)

    protected static string $view = 'filament.widgets.agenda-widget'; // point to your custom blade view

    protected function getTableQuery(): Builder
    {
        return Kerjasama::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama')
            ->label('Nama')
            ->wrap()
            ->limit(25), // forces wrapping instead of single-line, ->limit(30) // optional, limits characters,
            Tables\Columns\TextColumn::make('lembaga')
            ->label('Lembaga')
            ->wrap()
            ->limit(25),
            Tables\Columns\TextColumn::make('jenis')
            ->label('Jenis')
            ->wrap()
            ->limit(25),
            Tables\Columns\TextColumn::make('mulai')
            ->date('d F Y')
            ->wrap()
            ->limit(25),
            Tables\Columns\TextColumn::make('selesai')
            ->date('d F Y')
            ->wrap()
            ->limit(25),
        ];
    }

    // Show only 5 rows
    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
