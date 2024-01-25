<?php

namespace App\Livewire\Actions;

use Livewire\Component;

class ToggleModal extends Component
{
    public function toggleModal()
    {
        $this->dispatch('toggleModal');
    }


    public function render()
    {
        return view('livewire.actions.toggle-modal');
    }
}
