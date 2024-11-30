<?php

namespace App\Livewire;

use Livewire\Component;

class SmallClubCard extends Component
{
    public $image;
    public $name;
    public $incharge;
    public $memberCount;
    public $eventCount;

    public function render()
    {
        return view('livewire.small-club-card');
    }
}
