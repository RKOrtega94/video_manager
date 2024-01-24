<?php

namespace Tests\Feature\Livewire\Video;

use App\Livewire\Video\Grid;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class GridTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Grid::class)
            ->assertStatus(200);
    }
}
