<?php

namespace App\View\Components;

use App\Models\Video;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class VideoCard extends Component
{
    public  $video;
    /**
     * Create a new component instance.
     */
    public function __construct($video)
    {
        // parse the video
        $this->video = $video;
    }

    public function getThumbnail(): string
    {
        $video = new Video($this->video);
        return $video->getThumbnail();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video-card');
    }
}
