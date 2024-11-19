<?php

namespace App\Livewire;

use Livewire\Component;

class SmallGetTheNextShowTicket extends Component
{

    public $eventName;
    public $eventDate;
    public $eventTime;
    public $ticketRoute;

    public function mount($eventName, $eventDate, $eventTime, $ticketRoute)
    {
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
        $this->eventTime = $eventTime;
        $this->ticketRoute = $ticketRoute;
    }

    public function render()
    {
        return view('livewire.small-get-the-next-show-ticket');
    }
}
