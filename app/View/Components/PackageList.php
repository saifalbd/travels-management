<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class PackageList extends Component
{

    public $packages;
    /**
     * Create a new component instance.
     */
    public function __construct(Collection $packages)
    {
        $this->packages = $packages;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.package-list');
    }
}
