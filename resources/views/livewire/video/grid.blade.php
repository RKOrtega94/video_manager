<div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
    @foreach ($videos as $video)
        <x-video-card :video="$video" />
    @endforeach
</div>
