<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Competency extends Component
{

    public $name;
    public $stars;
    public $years;
    public $imageLink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($competency)
    {
        $this->name = $competency["name"];
        $this->stars = $competency["stars"];
        $this->years = $competency["years"];
        $this->imageLink = $competency["imageLink"];
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
