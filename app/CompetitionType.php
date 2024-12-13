<?php

namespace App;

enum CompetitionType: string
{
    case INDIVIDUAL = 'individual';
    case TEAM = 'team';
    case BOTH = 'both';

    /**
     * Get all competition types as an array.
     */
    public static function all(): array
    {
        return [
            self::INDIVIDUAL->value,
            self::TEAM->value,
            self::BOTH->value,
        ];
    }
}
