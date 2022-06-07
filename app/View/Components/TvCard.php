<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TvCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $movie;

    public function __construct($movie)
    {
        $this->movie = $movie;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.tv-card' , $this->movie);
    }
}
