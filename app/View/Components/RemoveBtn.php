<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RemoveBtn extends Component
{

    public $action;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action,$title='')
    {
        $this->action = $action;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.remove-btn');
    }
}
