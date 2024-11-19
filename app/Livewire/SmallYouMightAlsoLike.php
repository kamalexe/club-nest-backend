<?php

namespace App\Livewire;

use Livewire\Component;

class SmallYouMightAlsoLike extends Component
{
    public $eventImage;
    public $eventDateRange;
    public $eventName;
    public $eventDetailsRoute;
    public $ticketDetailsRoute;

    public function mount($eventImage, $eventDateRange, $eventName, $eventDetailsRoute, $ticketDetailsRoute)
    {
        $this->eventImage = $eventImage;
        $this->eventDateRange = $eventDateRange;
        $this->eventName = $eventName;
        $this->eventDetailsRoute = $eventDetailsRoute;
        $this->ticketDetailsRoute = $ticketDetailsRoute;
    }

    public function render()
    {
        return view('livewire.small-you-might-also-like');
    }
}
