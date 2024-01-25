<?php

namespace App\Livewire\Video;

use Livewire\Attributes\On;
use Livewire\Component;

class Modal extends Component
{
    public bool $show = false;

    #[On('toggleModal')]
    public function toggleModal()
    {
        $this->show = !$this->show;
    }

    public function render()
    {
        return view('livewire.video.modal');
    }
}
