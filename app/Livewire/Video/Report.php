<?php

namespace App\Livewire\Video;

use App\Service\ReportService;
use App\Service\ViewService;
use Livewire\Component;

class Report extends Component
{
    public $viewsReport = [];
    public $searchReport = [];

    protected ViewService $viewService;
    protected ReportService $reportService;

    public function mount()
    {
        $this->viewService = new ViewService();
        $this->reportService = new ReportService();

        $this->viewsReport = $this->viewService->buildReport();
        $this->searchReport = $this->reportService->buildSearchReport();
    }

    public function render()
    {
        return view('livewire.video.report');
    }
}
