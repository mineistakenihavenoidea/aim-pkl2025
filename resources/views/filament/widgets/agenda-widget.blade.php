<a href="{{ \App\Filament\Resources\AgendaResource::getUrl('index') }}" class="block">
    <x-filament::widget class="fi-widget">
        <x-filament::card>
            {{ $this->table }}
        </x-filament::card>
    </x-filament::widget>
</a>
