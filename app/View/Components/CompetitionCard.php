<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CompetitionCard extends Component
{
    public $title, $slug, $date, $time, $desc, $max_person;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $slug, $date, $time, $desc)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->date = $date;
        $this->time = $time;
        $this->desc = $desc;
        // $this->max_person = $max_person;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.competition-card');
    }
}
