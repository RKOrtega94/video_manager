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

    // Return Array of Videos
    function search(string $filter)
    {
        $videos = Video::whereRaw('LOWER(title) LIKE ?', [strtolower("%{$filter}%")])
            ->orWhereRaw('LOWER(description) LIKE ?', [strtolower("%{$filter}%")])
            ->get();

        return $videos->toArray();
    }
}
