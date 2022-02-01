<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Competency extends Component
{
    
    public $name;
    public $stars;
    public $years;
    public $image_link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $stars, $years, $image_link)
    {
        $this->name = $name;
        $this->stars = $stars;
        $this->years = $years;
        $this->image_link = $image_link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.competency');
    }
}
