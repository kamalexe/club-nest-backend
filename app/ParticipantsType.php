<?php

namespace App;


enum ParticipantsType: string
{
    case INDIVIDUAL = 'individual';
    case TEAM = 'team';

    public function label(): string
    {
        return match ($this) {
            self::INDIVIDUAL => 'Individual',
            self::TEAM => 'Team',
        };
    }
}
