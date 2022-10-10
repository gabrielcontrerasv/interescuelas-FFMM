<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;
use App\Models\Participant;
use App\Models\TeamParticipant;
use App\Models\Scores;
use Livewire\WithPagination;

class Teams extends Component
{
    use WithPagination;

    public $search;
    public function render()
    {
        $TeamParticipants =  Team::with([
            "force",
            "disciplineParticipants",
            "disciplineParticipants.participant",
        ])->where('name', 'like', '%' . $this->search . '%')
            ->paginate(2);
        return view('livewire.teams', compact('TeamParticipants'));
    }
}
