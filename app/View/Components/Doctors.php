<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Doctors extends Component
{
    /**
     * Create a new component instance.
     */
    public $type,$branches , $coes,$title,$description;

    public function __construct($type,$branches,$coes,$title,$description)
    {
        $this->type = $type;
        $this->branches = $branches;
        $this->coes = $coes;
        $this->title = $title;
        $this->description = $description;
    }
    
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.doctors');
    }
}
