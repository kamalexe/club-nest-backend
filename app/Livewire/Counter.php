<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class Counter extends Component
{
    public Event $event;

    public function mount($event)
    {
        $this->event = $event;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
