<?php

namespace App\View\Components\Video;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ReportItem extends Component
{
    public string $item = '';
    public array $value = [];
    /**
     * Create a new component instance.
     */
    public function __construct(string $item, array $value)
    {
        $this->item = $item;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video.report-item');
    }
}
