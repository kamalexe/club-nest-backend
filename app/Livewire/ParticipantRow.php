<?php

namespace App\Livewire;

use App\Models\Participant;
use Livewire\Component;

class ParticipantRow extends Component
{
    public Participant $participant;
    public function render()
    {
        return view('livewire.participant-row');
    }
}
