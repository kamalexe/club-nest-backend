<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class EventDetailsCard extends Component
{
    public Event $event;

    public function mount(Event $event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.event-details-card');
    }
}
