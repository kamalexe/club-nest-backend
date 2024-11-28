<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $label;
    public $eventName;
    public $ticketsAvailable;
    public $eventDate;
    public $eventTime;
    public $location;
    public $urlPath;

    public function mount($label = "Hi", $eventName = "Sunny Hill Festival", $ticketsAvailable = 140, $eventDate = "Sep 16, 2021", $eventTime = "18:00 to 22:00", $location = "Copacabana Beach, Rio de Janeiro",  $urlPath = null)
    {
       $this->label = $label;
        $this->eventName = $eventName;
        $this->ticketsAvailable = $ticketsAvailable;
        $this->eventDate = $eventDate;
        $this->eventTime = $eventTime;
        $this->location = $location;
        $this->urlPath = $urlPath;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
