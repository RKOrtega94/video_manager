<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $videos = [
            [
                'title' => 'Video 1',
                'description' => 'Description 1',
                'url' => 'https://www.youtube.com/watch?v=1',
            ],
            [
                'title' => 'Video 2',
                'description' => 'Description 2',
                'url' => 'https://www.youtube.com/watch?v=2',
            ],
            [
                'title' => 'Video 3',
                'description' => 'Description 3',
                'url' => 'https://www.youtube.com/watch?v=3',
            ],
            [
                'title' => 'Video 4',
                'description' => 'Description 4',
                'url' => 'https://www.youtube.com/watch?v=4',
            ],
            [
                'title' => 'Video 5',
                'description' => 'Description 5',
                'url' => 'https://www.youtube.com/watch?v=5',
            ],
            [
                'title' => 'Video 6',
                'description' => 'Description 6',
                'url' => 'https://www.youtube.com/watch?v=6',
            ],
            [
                'title' => 'Video 7',
                'description' => 'Description 7',
                'url' => 'https://www.youtube.com/watch?v=7',
            ],
            [
                'title' => 'Video 8',
                'description' => 'Description 8',
                'url' => 'https://www.youtube.com/watch?v=8',
            ],
            [
                'title' => 'Video 9',
                'description' => 'Description 9',
                'url' => 'https://www.youtube.com/watch?v=9',
            ],
            [
                'title' => 'Video 10',
                'description' => 'Description 10',
                'url' => 'https://www.youtube.com/watch?v=10',
            ],
        ];

        foreach ($videos as $video) {
            Video::create($video);
        }
    }
}
