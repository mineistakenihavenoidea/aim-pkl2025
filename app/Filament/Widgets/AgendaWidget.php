<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use App\Models\Agenda;
use Illuminate\Database\Eloquent\Builder;

class AgendaWidget extends BaseWidget
{
    protected static string $view = 'filament.widgets.agenda-widget'; // point to your custom blade view

    protected function getTableQuery(): Builder
    {
        return Agenda::query()->latest()->take(5);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama_agenda')
                ->sortable()
                ->label('Nama')
                ->limit(20),
            Tables\Columns\TextColumn::make('lokasi')
                ->sortable()
                ->label('Lokasi')
                ->limit(20),
            Tables\Columns\TextColumn::make('tanggal')
                ->sortable()
                ->date('d M Y')
                ->label('Tanggal')
                ->limit(20),
            Tables\Columns\TextColumn::make('keterangan')
                ->sortable()
                ->label('Keterangan')
                ->limit(20),
        ];
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
