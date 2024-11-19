<?php

namespace App\Livewire;

use Livewire\Component;

class SmallComingEventCard extends Component
{
    public $eventImage;
    public $eventName;
    public $eventTime;
    public $eventLocation;

    public function mount($eventImage, $eventName, $eventTime, $eventLocation)
    {
        $this->eventImage = $eventImage;
        $this->eventName = $eventName;
        $this->eventTime = $eventTime;
        $this->eventLocation = $eventLocation;
    }
    public function render()
    {
        return view('livewire.small-coming-event-card');
    }
}
