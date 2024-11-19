<?php

namespace App\Livewire;

use Livewire\Component;

class SmallOurShowsEvents extends Component
{

    public $eventName;
    public $eventDescription;
    public $eventImage;
    public $eventDate;
    public $eventLocation;
    public $eventGuests;
    public $eventDetailsRoute;
    public $ticketPurchaseRoute;

    public function mount($eventName, $eventDescription, $eventImage, $eventDate, $eventLocation, $eventGuests, $eventDetailsRoute, $ticketPurchaseRoute)
    {
        $this->eventName = $eventName;
        $this->eventDescription = $eventDescription;
        $this->eventImage = $eventImage;
        $this->eventDate = $eventDate;
        $this->eventLocation = $eventLocation;
        $this->eventGuests = $eventGuests;
        $this->eventDetailsRoute = $eventDetailsRoute;
        $this->ticketPurchaseRoute = $ticketPurchaseRoute;
    }

    public function render()
    {
        return view('livewire.small-our-shows-events');
    }
}
