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
                'title' => 'Watchmen: La Historia En 1 Video',
                'description' => 'Resumen de la historia de Watchmen en 1 video',
                'url' => 'https://www.youtube.com/watch?v=vNKpoz_vAT0',
            ],
        ];

        foreach ($videos as $video) {
            Video::create($video);
        }
    }
}
