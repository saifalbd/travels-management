<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BBar extends Component
{


    public $one;
    public $two;
    public $url;
    public $add;

    /**
     * Create a new component instance.
     */
    public function __construct(string $o,string $t,string $url='',$add = true)
    {
        $this->one = $o;
        $this->two = $t;
        $this->url = $url;
        $this->add = $add;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.b-bar');
    }
}
