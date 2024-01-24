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
}
