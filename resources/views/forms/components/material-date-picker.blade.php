@once
    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @endpush
    <div
    x-data
    x-init="
        flatpickr($refs.input, {
            altInput: true,
            altFormat: 'j F Y',
            dateFormat: 'Y-m-d',
            monthSelectorType: 'dropdown',
            yearSelectorType: 'dropdown',
            yearRange: [2010, 2100],
        })
    "
>
    <input
        x-ref="input"
        type="text"
        id="{{ $getId() }}"
        name="{{ $getName() }}"
        value="{{ $getState() }}"
        {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
    >
</div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @endpush
@endonce