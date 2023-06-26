<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ConditionsImageSlider extends Component
{
    /**
     * Create a new component instance.
     */
    public $images;

    public function __construct($images)
    {
        $this->images = $images;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.conditions-image-slider');
    }
}