<?php

namespace Tests\Feature\Livewire\Video;

use App\Livewire\Video\Filter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FilterTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Filter::class)
            ->assertStatus(200);
    }
}
