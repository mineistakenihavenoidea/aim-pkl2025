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
            Tables\Columns\TextColumn::make('nama_agenda')->label('Nama')->limit(25),
            Tables\Columns\TextColumn::make('lokasi')->label('Lokasi'),
            Tables\Columns\TextColumn::make('tanggal')->date('d M Y')->label('Tanggal'),
            Tables\Columns\TextColumn::make('keterangan')->label('Keterangan'),
        ];
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
