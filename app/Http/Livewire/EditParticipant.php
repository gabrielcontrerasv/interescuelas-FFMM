<?php

namespace App\Http\Livewire;
use App\Models\Participant;
use Livewire\WithPagination;

use Livewire\Component;

class EditParticipant extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $participant = Participant::with([
            "disciplineParticipants",
            "disciplineParticipants.award",
            "disciplineParticipants.discipline",
            "disciplineParticipants.discipline.sport",
            "force",
            "nationality",
        ])->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('identification', 'like', '%' . $this->search . '%')
            ->paginate(6);


        return view('livewire.edit-participants', [
            'participants' => $participant
        ]);
    }
}
