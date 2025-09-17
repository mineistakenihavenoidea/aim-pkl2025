<x-filament::widget>
    <x-filament::card>
    <h2 class="text-lg font-bold mb-3">Gambar Terbaru</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($this->getMedia() as $media)
                <div class="overflow-hidden rounded-lg shadow">
                    <img src="{{ Storage::disk('public')->url($media->file_path) }}" alt="Image" class="w-full h-48 object-cover">
                </div>
            @endforeach
        </div>
    </x-filament::card>
</x-filament::widget>
