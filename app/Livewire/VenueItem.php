<?php

namespace App\Livewire;

use Livewire\Component;

class VenueItem extends Component
{
    public $venueImage;
    public $venueName;
    public $venueDescription;
    public $ticketsSold;
    public $maxCapacity;
    public $ticketPrice;

    public function mount($venueImage, $venueName, $venueDescription, $ticketsSold, $maxCapacity, $ticketPrice)
    {
        $this->venueImage = $venueImage;
        $this->venueName = $venueName;
        $this->venueDescription = $venueDescription;
        $this->ticketsSold = $ticketsSold;
        $this->maxCapacity = $maxCapacity;
        $this->ticketPrice = $ticketPrice;
    }

    public function render()
    {
        return view('livewire.venue-item');
    }
}
