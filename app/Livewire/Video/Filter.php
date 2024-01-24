<?php

namespace App\Livewire\Video;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Filter extends Component
{
    public $search = '';

    protected $listeners = [
        'search' => 'search',
    ];

    public function onSearch()
    {
        Log::info($this->search);
        $this->dispatch('search', search: $this->search);
    }

    public function render()
    {
        return view('livewire.video.filter');
    }
}
