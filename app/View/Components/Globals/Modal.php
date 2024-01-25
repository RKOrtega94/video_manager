<?php

namespace App\View\Components\Globals;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Modal extends Component
{
    public bool $showModal;
    /**
     * Create a new component instance.
     */
    public function __construct($showModal)
    {
        $this->showModal = $showModal;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.globals.modal');
    }
}
