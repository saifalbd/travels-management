<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class AppWeb extends Component
{



    public $students;
    public $instructors;
    /**
     * Create a new component instance.
     */
    public function __construct(Collection $students,Collection $instructors)
    {
        $this->students = $students;
        $this->instructors = $instructors;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layout.app-web');
    }
}
