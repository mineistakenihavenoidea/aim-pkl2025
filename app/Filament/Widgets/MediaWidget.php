<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Media;

class MediaWidget extends Widget
{

    protected static string $view = 'filament.widgets.media-widget';

    public function getMedia()
    {
        return Media::latest()->take(6)->get();
    }
}
