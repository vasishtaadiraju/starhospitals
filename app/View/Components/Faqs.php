<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Faqs extends Component
{
    /**
     * Create a new component instance.
     */
    public $faqs , $content;
    public function __construct($faqs, $content)
    {
        $this->faqs = $faqs;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.faqs');
    }
}
