<x-filament-widgets::widget>
    <x-filament::section>
        <a href="{{ \App\Filament\Resources\TentangKamiResource::getUrl('index') }}">
            <h2 class="text-lg font-bold mb-3 underline">Tentang Kami</h2>
        </a>
        @foreach($data['konten'] as $item)
            <div class="p-4 bg-white rounded shadow mb-3">
                <div class="prose max-w-none text-red-800">
                    {!! $item->konten !!}
                </div>
            </div>
        @endforeach
    </x-filament::section>
</x-filament-widgets::widget>
