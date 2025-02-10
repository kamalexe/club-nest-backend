<?php

namespace App;

enum CompetitionType: string
{
    case INDIVIDUAL = 'individual';
    case TEAM = 'team';
    case BOTH = 'both';

    public static function all(): array
    {
        return [
            self::INDIVIDUAL->value,
            self::TEAM->value,
            self::BOTH->value
        ];
    }
}
