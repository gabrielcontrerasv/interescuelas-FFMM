<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Discipline;
use Livewire\WithPagination;

class Disciplines extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $disciplines = Discipline::
        leftjoin('sports', 'sports.id', '=', 'sport_id')
        ->leftjoin('genders', 'genders.id', '=', 'gender_id')
        ->where('discipline', 'like', '%' . $this->search . '%')
        ->paginate(25);
        return view('livewire.disciplines',compact('disciplines'));
    }
}