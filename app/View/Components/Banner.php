<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    /**
     * Create a new component instance.
     */
    public $imgurl,$text,$breadcrum;
    public function __construct($imgurl,$text,$breadcrum)
    {
        $this->imgurl = $imgurl;
        $this->text = $text;
        $this->breadcrum = $breadcrum;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner');
    }
}
