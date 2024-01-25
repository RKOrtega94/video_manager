<?php

namespace App\Livewire\Globals;

use Livewire\Attributes\On;
use Livewire\Component;

class Modal extends Component
{
    public bool $showModal = true;

    #[On('toggleModal')]
    public function toggleModal(): void
    {
        $this->showModal = !$this->showModal;
    }

    public function render()
    {
        return view('livewire.globals.modal');
    }
}
