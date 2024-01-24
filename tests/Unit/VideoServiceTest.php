<?php

namespace Tests\Unit;

use App\Models\Video;
use App\Service\VideoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class VideoServiceTest extends TestCase
{
    use RefreshDatabase;


    public function test_create_video(): void
    {
        $service = new VideoService();

        $data = [
            "name" => "Video 1",
            "url" => "https://www.youtube.com/watch?v=1",
            "description" => "Video description",
            "state" => "public",
        ];

        $video = $service->create($data);

        $this->assertInstanceOf(Video::class, $video);
    }
}
