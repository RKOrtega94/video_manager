<?php

namespace Tests\Feature\Livewire\Globals;

use App\Livewire\Globals\Modal;
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
