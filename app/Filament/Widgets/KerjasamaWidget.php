<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use App\Models\Kerjasama;
use Illuminate\Database\Eloquent\Builder;

class KerjasamaWidget extends BaseWidget
{
    // Make the widget span only 2 columns (like 2 StatsOverview cards)

    protected function getTableHeading(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return new \Illuminate\Support\HtmlString(
            '<a href="' . \App\Filament\Resources\KerjasamaResource::getUrl('index') . '" class="text-lg font-bold mb-3 underline">
                Kerjasama
            </a>'
        );
    }

    protected function getTableQuery(): Builder
    {
        return Kerjasama::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama')
            ->label('Nama')
            ->wrap(), // forces wrapping instead of single-line, ->limit(30) // optional, limits characters,
            Tables\Columns\TextColumn::make('lembaga')
            ->label('Lembaga')
            ->wrap(),
            Tables\Columns\TextColumn::make('jenis')
            ->label('Jenis')
            ->wrap(),
            Tables\Columns\TextColumn::make('mulai')
            ->date('d F Y')
            ->wrap(),
            Tables\Columns\TextColumn::make('selesai')
            ->date('d F Y')
            ->wrap(),
        ];
    }

    // Show only 5 rows
    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
