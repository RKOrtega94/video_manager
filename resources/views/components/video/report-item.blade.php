<div class="w-full flex flex-row justify-start gap-2 my-2">
    <div class="w-16 h-16">
        <img src="{{ $value['thumbnail'] }}" alt="{{ $item }}" class="w-full h-full rounded shadow aspect-video">
    </div>
    <div class="w-full">
        <h6 class="text-xl font-bold">{{ $item }}</h6>
        <p class="text-gray-400 dark:text-gray-300">{{ $value['views'] ?? $value['searchs'] }} @if (isset($value['views']))
                @lang('visualizaciones')
            @else
                @lang('búsquedas')
            @endif
        </p>
        <div class="w-full flex flex-col items-start my-2 rounded shadow-md p-2">
        </div>
    </div>

</div>
