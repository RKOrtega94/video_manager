<?php

namespace App\Livewire\Video;

use App\Service\ReportService;
use App\Service\VideoService;
use Livewire\Component;
use Livewire\Attributes\On;

class Grid extends Component
{
    public array $videos = [];
    protected ReportService $reportService;
    protected VideoService $videoService;

    // on mounted
    public function mount(): void
    {
        $this->videoService = new VideoService();


        $this->videos = $this->videoService->search('');
    }


    #[On('search')]
    public function search(string $search): void
    {
        $this->videoService = new VideoService();
        $this->reportService = new ReportService();

        $this->videos = $this->videoService->search($search);

        foreach ($this->videos as $video) {
            $this->reportService->storeSearch($video);
        }
    }

    public function render()
    {
        return view('livewire.video.grid');
    }
}
