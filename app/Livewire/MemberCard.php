<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class MemberCard extends Component
{
    public Member $member;

    public function mount($member)
    {
        $this->member = $member;
    }
    public function render()
    {
        return view('livewire.member-card');
    }
}
