<?php

namespace Tests\Feature\Livewire\Video;

use App\Livewire\Video\Report;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ReportTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        $viewService = \Mockery::mock('overload:App\Service\ViewService');
        $reportService = \Mockery::mock('overload:App\Service\ReportService');

        $expectedViewsReport = ['viewsReport'];
        $expectedSearchReport = ['searchReport'];

        $viewService->shouldReceive('buildReport')->once()->andReturn($expectedViewsReport);
        $reportService->shouldReceive('buildSearchReport')->once()->andReturn($expectedSearchReport);

        Livewire::test(Report::class)
            ->set('viewService', $viewService)
            ->set('reportService', $reportService)
            ->assertSet('viewsReport', $expectedViewsReport)
            ->assertSet('searchReport', $expectedSearchReport);
    }
}
