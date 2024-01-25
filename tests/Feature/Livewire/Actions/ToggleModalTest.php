<?php

use App\Livewire\Actions\ToggleModal;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ToggleModal::class)
        ->assertStatus(200);
});
