<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderNavigation extends Component
{
    // public $movie;
    // public $genres;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->movie = $movie;
        // $this->genres = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-navigation');
    }
}