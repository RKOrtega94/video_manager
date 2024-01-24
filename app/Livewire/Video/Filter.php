<?php

namespace App\Livewire\Video;

use Livewire\Component;

class Filter extends Component
{
    public string $searchParam = '';

    public function search(string $search): void
    {
        $this->emit('search', $search);
    }

    public function render()
    {
        return view('livewire.video.filter');
    }
}
