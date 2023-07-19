<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public $coes,$branches,$specialists;

    public function __construct($coes,$branches,$specialists)
    {
        $this->coes = $coes;
        $this->branches = $branches;
        $this->specialists = $specialists;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
