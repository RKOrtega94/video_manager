<?php

namespace App\Livewire\Video;

use App\Service\ViewService;
use Livewire\Component;

class Report extends Component
{
    public $viewsReport = [];

    protected ViewService $viewService;

    public function mount()
    {
        $this->viewService = new ViewService();

        $this->viewsReport = $this->viewService->buildReport();
    }

    public function render()
    {
        return view('livewire.video.report');
    }
}
