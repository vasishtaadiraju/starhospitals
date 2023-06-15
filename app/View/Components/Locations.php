<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Locations extends Component
{
    /**
     * Create a new component instance.
     */
    public $locations,$content;
    public function __construct($locations,$content)
    {
        $this->locations = $locations;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.locations');
    }
}
