<?php

namespace PhpCommonEnums\DayOfWeek\Enumeration;

enum DayOfWeekEnum : string
{
    case Monday = 'Mon';
    case Tuesday = 'Tue';
    case Wednesday = 'Wed';
    case Thursday = 'Thu';
    case Friday = 'Fri';
    case Saturday = 'Sat';
    case Sunday = 'Sun';
    public function getNumeric(bool $iso8601 = false): int
    {
        return match ($this) {
            self::Monday => 1,
            self::Tuesday => 2,
            self::Wednesday => 3,
            self::Thursday => 4,
            self::Friday => 5,
            self::Saturday => 6,
            self::Sunday => $iso8601 ? 7 : 0,
        };
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::Monday => 'Monday',
            self::Tuesday => 'Tuesday',
            self::Wednesday => 'Wednesday',
            self::Thursday => 'Thursday',
            self::Friday => 'Friday',
            self::Saturday => 'Saturday',
            self::Sunday => 'Sunday',
        };
    }
}
