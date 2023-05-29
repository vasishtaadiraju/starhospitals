<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Blogs extends Component
{
    /**
     * Create a new component instance.
     */
    public $content , $blogs;

    public function __construct($content,$blogs)
    {
        $this->content = $content;        
        $this->blogs = $blogs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blogs');
    }
}
