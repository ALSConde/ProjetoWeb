<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    //Vars of the component
    public $school;
    public $modalOptions;

    /**
     * Create a new component instance.
     */
    public function __construct($school, $modalOptions)
    {
        //
        $this->school = $school;
        $this->modalOptions = $modalOptions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
