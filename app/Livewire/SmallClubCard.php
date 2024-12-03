<?php

namespace App\Livewire;

use App\Models\Club;
use Livewire\Component;

class SmallClubCard extends Component
{
    public Club $club;

    public function render()
    {
        return view('livewire.small-club-card');
    }
}
