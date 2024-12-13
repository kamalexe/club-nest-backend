<?php

namespace App\Livewire;

use App\Models\Competition;
use Livewire\Component;

class CompetitionCard extends Component
{
    public Competition $competition;
    public function render()
    {
        return view('livewire.competition-card');
    }
}
