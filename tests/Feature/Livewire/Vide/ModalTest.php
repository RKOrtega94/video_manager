<?php

namespace Tests\Feature\Livewire\Vide;

use App\Livewire\Vide\Modal;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ModalTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Modal::class)
            ->assertStatus(200);
    }
}
