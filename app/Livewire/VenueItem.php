<?php

namespace App\Livewire;

use App\Models\Club;
use Livewire\Component;

class VenueItem extends Component
{

    public Club $club;
    public function mount($club)
    {
        $this->club =  $club;
    }

    public function render()
    {
        return view('livewire.venue-item');
    }
}
