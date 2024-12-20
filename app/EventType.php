<?php

namespace App;


enum EventType: string
{
    case COMPETITION = 'competition';
    case WORKSHOP = 'workshop';
    case LECTURE = 'lecture';

    public function label(): string
    {
        return match ($this) {
            self::COMPETITION => 'Competition',
            self::WORKSHOP => 'Workshop',
            self::LECTURE => 'Lecture',
        };
    }

    public function buttonMessage(): string
    {
        return match ($this) {
            self::COMPETITION => 'Join the Competition',
            self::WORKSHOP => 'Sign Up',
            self::LECTURE => 'Join Now',
        };
    }

    public function getDetails(): array
    {
        return [
            'label' => $this->label(),
            'button_message' => $this->buttonMessage(),
            'route' => $this->route(),
        ];
    }
    public function route(): string

    {
        return match ($this) {
            self::COMPETITION => 'competition.index',
            self::WORKSHOP => 'register.individual',
            self::LECTURE => 'register.individual',
        };
    }
}
