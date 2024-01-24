<?php

namespace App\Livewire\Video;

use App\Service\VideoService;
use Livewire\Component;

class Grid extends Component
{
    protected $listeners = [
        'search' => 'search',
    ];

    public array $videos = [];

    // on mounted
    public function mount(): void
    {
        $service = new VideoService();

        $this->videos = $service->search('');
    }


    public function search(string $search): void
    {
        $service = new VideoService();

        $this->videos = $service->search($search);
    }

    public function render()
    {
        return view('livewire.video.grid');
    }
}
