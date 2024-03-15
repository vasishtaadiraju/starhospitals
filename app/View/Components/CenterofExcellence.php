<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CenterofExcellence extends Component
{
    /**
     * Create a new component instance.
     */
    public $coes;

    public function __construct($coes)
    {
        $this->coes = $coes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.centerof-excellence');
    }
}
