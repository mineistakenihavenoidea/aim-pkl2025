<?php

namespace App\Filament\Widgets;

use App\Models\TentangKami; // example resource model
use Filament\Widgets\Widget;

class TentangKamiHtml extends Widget
{
    protected static string $view = 'filament.widgets.tentang-kami-html';

    public array $data = [];

    public function mount(): void
    {
        // Example: fetch the latest 5 entries from Buku Tamu
        $this->data['konten'] = TentangKami::get();
    }
}
