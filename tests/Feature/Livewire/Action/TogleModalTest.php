<?php

namespace Tests\Feature\Livewire\Action;

use App\Livewire\Action\TogleModal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TogleModalTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(TogleModal::class)
            ->assertStatus(200);
    }
}
