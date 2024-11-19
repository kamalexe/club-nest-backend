<?php

namespace App\Livewire;

use Livewire\Component;

class SmallTicketsPageCard extends Component
{
    public $image;
    public $price;
    public $ticketsLeft;
    public $eventName;
    public $eventTime;
    public $eventLocation;
    public $ticketDetailsRoute;
    
    public function render()
    {
        return view('livewire.small-tickets-page-card');
    }
}
