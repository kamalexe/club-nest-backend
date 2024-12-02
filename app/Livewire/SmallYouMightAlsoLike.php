<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Faculty;

class SmallYouMightAlsoLike extends Component
{
    // public $eventImage;
    // public $eventDateRange;
    // public $eventName;
    // public $eventDetailsRoute;
    // public $ticketDetailsRoute;

    public Faculty $faculty;
    public function mount($faculty)
    {
        $this->faculty = $faculty;
    }

    public function render()
    {
        return view('livewire.small-you-might-also-like');
    }
}
