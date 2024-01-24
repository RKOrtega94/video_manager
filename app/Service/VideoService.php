<?php

namespace App\Service;

use App\Models\Video;

class VideoService
{
    function create(array $data): Video
    {
        $video = Video::create($data);

        return $video;
    }

    function update(Video $video, array $data): Video
    {
        $video->update($data);

        return $video;
    }

    function delete(Video $video): void
    {
        $video->delete();
    }

    function get(int $id): Video
    {
        $video = Video::findOrFail($id);

        return $video;
    }

    function search(string $filter): array
    {
        $videos = Video::where('title', 'like', "%{$filter}%")
            ->orWhere('description', 'like', "%{$filter}%")
            ->orWhere('url', 'like', "%{$filter}%")
            ->get();

        return $videos->toArray();
    }
}
