<x-app-layout>
    <div>
        <h3 class="text-2xl">{{ $video['title'] }}</h3>
        <object class="w-full aspect-video" data="http://www.youtube.com/v/{{ $video->getUrlId() }}"
            type="application/x-shockwave-flash">
            <param name="src" value="http://www.youtube.com/v/{{ $video->getUrlId() }}" />
        </object>
        <p class="text-base">
            {{ $video['description'] }}
        </p>
    </div>
</x-app-layout>
