<div class="flex items-center">
    @for ($i = 1; $i <= 5; $i++)
        @if ($i <= $getState())
            <span class="text-yellow-400">★</span>
        @else
            <span class="text-gray-300">★</span>
        @endif
    @endfor
</div>
