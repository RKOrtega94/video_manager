<?php

namespace App\Livewire\Video;

use App\Service\VideoService;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Form extends Component
{

    protected VideoService $videoService;

    public $video;

    #[Validate('required|string')]
    public string $title = '';

    #[Validate('required|string')]
    public string $description = '';

    #[Validate('required|string')]
    public string $url = '';

    public function mount($video = null)
    {
        $this->video = $video;
    }

    public function save()
    {
        $this->validate();

        $this->videoService = new VideoService();

        if ($this->video) {
            $this->videoService->update($this->video, [
                'title' => $this->title,
                'description' => $this->description,
                'url' => $this->url,
            ]);
        } else {
            $this->videoService->create([
                'title' => $this->title,
                'description' => $this->description,
                'url' => $this->url,
            ]);
        }

        $this->dispatch('saved');
    }


    public function render()
    {
        return view('livewire.video.form');
    }
}
