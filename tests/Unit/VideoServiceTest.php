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
    public function test_create_video(): void
    {
        $this->service = new VideoService();

        $data = [
            "title" => "Teste",
            "description" => "Teste",
            "url" => "https://www.youtube.com/watch?v=9bZkp7q19f0",
        ];

        $video = $this->service->create($data);

        $this->assertInstanceOf(Video::class, $video);
        $this->assertDatabaseHas("videos", $data);
    }

    public function test_update_video(): void
    {
        $this->service = new VideoService();

        $data = [
            "title" => "Teste",
            "description" => "Teste",
            "url" => "https://www.youtube.com/watch?v=9bZkp7q19f0",
        ];

        $video = $this->service->create($data);

        $data = [
            "title" => "Teste 2",
            "description" => "Teste 2",
            "url" => "https://www.youtube.com/watch?v=9bZkp7q19f0",
        ];

        $video = $this->service->update($video, $data);

        $this->assertInstanceOf(Video::class, $video);
        $this->assertDatabaseHas("videos", $data);
    }

    public function test_delete_video(): void
    {
        $this->service = new VideoService();

        $data = [
            "title" => "Teste",
            "description" => "Teste",
            "url" => "https://www.youtube.com/watch?v=9bZkp7q19f0",
        ];

        $video = $this->service->create($data);

        $this->service->delete($video);

        $this->assertDatabaseMissing("videos", $data);
    }

    public function test_get_video(): void
    {
        $this->service = new VideoService();

        $data = [
            "title" => "Teste",
            "description" => "Teste",
            "url" => "https://www.youtube.com/watch?v=9bZkp7q19f0",
        ];

        $video = $this->service->create($data);

        $video = $this->service->get($video->id);

        $this->assertInstanceOf(Video::class, $video);
        $this->assertDatabaseHas("videos", $data);
    }
}
