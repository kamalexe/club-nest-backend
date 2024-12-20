<?php

namespace App;

enum Semester: string
{
    case FIRST_YEAR_FIRST_SEM = '1st Year - 1st Semester';
    case FIRST_YEAR_SECOND_SEM = '1st Year - 2nd Semester';
    case SECOND_YEAR_FIRST_SEM = '2nd Year - 1st Semester';
    case SECOND_YEAR_SECOND_SEM = '2nd Year - 2nd Semester';
    case THIRD_YEAR_FIRST_SEM = '3rd Year - 1st Semester';
    case THIRD_YEAR_SECOND_SEM = '3rd Year - 2nd Semester';
    case FOURTH_YEAR_FIRST_SEM = '4th Year - 1st Semester';
    case FOURTH_YEAR_SECOND_SEM = '4th Year - 2nd Semester';

    public static function all(): array
    {
        return [
            self::FIRST_YEAR_FIRST_SEM->value,
            self::FIRST_YEAR_SECOND_SEM->value,
            self::SECOND_YEAR_FIRST_SEM->value,
            self::SECOND_YEAR_SECOND_SEM->value,
            self::THIRD_YEAR_FIRST_SEM->value,
            self::THIRD_YEAR_SECOND_SEM->value,
            self::FOURTH_YEAR_FIRST_SEM->value,
            self::FOURTH_YEAR_SECOND_SEM->value,
        ];
    }
}
