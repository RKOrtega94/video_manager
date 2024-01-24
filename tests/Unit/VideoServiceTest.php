<?php

namespace Tests\Unit;

use App\Models\Video;
use App\Service\VideoService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VideoServiceTest extends TestCase
{
    use RefreshDatabase;

    private VideoService $service;

    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->service = new VideoService();

        $data = [
            "name" => "Teste",
            "description" => "Teste",
            "url" => "https://www.youtube.com/watch?v=9bZkp7q19f0",
        ];

        $video = $this->service->create($data);

        $this->assertInstanceOf(Video::class, $video);
        $this->assertDatabaseHas("videos", $data);
    }
}
