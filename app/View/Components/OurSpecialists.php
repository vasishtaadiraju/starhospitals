<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OurSpecialists extends Component
{
    /**
     * Create a new component instance.
     */
    public $content,$branches,$coes;

    public function __construct($content,$branches,$coes)
    {
        $this->content = $content;
        $this->branches = $branches;
        $this->coes = $coes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.our-specialists');
    }
}
