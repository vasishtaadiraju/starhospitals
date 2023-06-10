<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ScrollTabs extends Component
{
    /**
     * Create a new component instance.
     */
    public $tabs;
    public function __construct($tabs)
    {
        $this->tabs = $tabs;
        // $this->tab_two = $tab_two;
        // $this->tab_three = $tab_three;
        // $this->tab_four = $tab_four;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.scroll-tabs');
    }
}
