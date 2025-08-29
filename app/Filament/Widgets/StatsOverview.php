<?php

namespace App\Filament\Widgets;

use App\Models\BukuTamu;
use App\Models\FormPertanyaan;
use App\Models\Magang;
use App\Filament\Resources\FormPertanyaanResource;
use App\Filament\Resources\BukuTamuResource;
use App\Filament\Resources\MagangResource;

use Illuminate\Support\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $today = Carbon::today();

        return [
            Card::make('Tamu', BukuTamu::whereDate('tanggal', '=', $today)
                ->count())
                ->description('Tamu hari ini')
                ->icon('heroicon-o-users')
                ->url(BukuTamuResource::getUrl('index')),

            Card::make('Magang',Magang::whereDate('mulai', '<=', $today)
                ->whereDate('selesai', '>=', $today)
                ->sum('jumlah_orang')) // <-- change 'jumlah' to your column name)
                ->description('Total Mahasiswa & Siswa Magang saat ini')
                ->icon('heroicon-o-users')
                ->url(MagangResource::getUrl('index')),

            Card::make('Form',FormPertanyaan::whereDate('created_at', '=', $today)->count()) // <-- change 'jumlah' to your column name)
                ->description('Form pertanyaan baru hari ini')
                ->icon('heroicon-s-document')
                ->url(FormPertanyaanResource::getUrl('index')),
            
        ];
    }
}
