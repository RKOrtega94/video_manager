<div>
    <a href="{{ route('video.show', $video['id']) }}" class="w-full flex flex-col h-auto">
        <div class="w-full h-48 bg-gray-300 dark:bg-gray-700 rounded">
            <img src="{{ $getThumbnail() }}" alt="{{ $video['title'] }}" class="w-full h-full object-cover rounded">
        </div>
        <h2
            class="text-xl font-bold text-gray-800 dark:text-gray-200 overflow-ellipsis overflow-hidden whitespace-nowrap">
            {{ $video['title'] }}
        </h2>
        <p class="text-gray-500 dark:text-gray-400 overflow-ellipsis overflow-hidden whitespace-nowrap">
            {{ $video['description'] }}
        </p>
    </a>
</div>
