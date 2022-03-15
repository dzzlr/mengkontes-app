<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CompetitionDetail extends Component
{
    public $title, $date, $time, $desc, $person;

    public function mount($title, $date, $time, $desc, $person)
    {
        $this->title = $title;
        $this->date = convertDate($date);
        $this->time = $time;
        $this->desc = $desc;
        $this->person = $person;
    }

    public function render()
    {
        return view('livewire.competition-detail');
    }
}
