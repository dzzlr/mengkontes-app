<?php

namespace App\Http\Livewire;

use App\Models\Competition;
use Livewire\Component;
use Livewire\WithPagination;

class CompetitionCard extends Component
{
    // use WithPagination;

    public $search;
 
    protected $queryString = ['search'];
 
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.competition-card', [
            'data' => Competition::where('title', 'like', '%'.$this->search.'%')->paginate(5),
        ]);
    }
}
