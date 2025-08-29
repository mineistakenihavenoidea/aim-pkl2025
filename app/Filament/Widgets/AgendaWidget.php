<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use App\Models\Agenda;
use Illuminate\Database\Eloquent\Builder;

class AgendaWidget extends BaseWidget
{
//    public function getHeading(): string
//    {
//        return 'Daftar Buku Tamu'; // widget/card title
//    }

    protected function getTableHeading(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return new \Illuminate\Support\HtmlString(
            '<a href="' . \App\Filament\Resources\AgendaResource::getUrl('index') . '" class="text-lg font-bold mb-3 underline">
                Agenda
            </a>'
        );
    }


    protected function getTableQuery(): Builder
    {
        return Agenda::query()->latest()->take(5);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama_agenda')->label('Nama')->limit(25),
            Tables\Columns\TextColumn::make('lokasi')->label('Keperluan'),
            Tables\Columns\TextColumn::make('tanggal')->date('d M Y')->label('Tanggal'),
            Tables\Columns\TextColumn::make('keterangan')->label('Keterangan'),
        ];
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
