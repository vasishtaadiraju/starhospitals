<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IntEnquiryForm extends Component
{
    /**
     * Create a new component instance.
     */
    public $content, $coes;

    public function __construct($content, $coes)
    {
        $this->content = $content;
        $this->coes = $coes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.int-enquiry-form');
    }
}
