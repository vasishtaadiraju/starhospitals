<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchDoctor extends Component
{
    /**
     * Create a new component instance.
     */
    public $branches , $coes;

    public function __construct($branches,$coes)
    {
        $this->branches = $branches;
        $this->coes = $coes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.search-doctor');
    }
}
