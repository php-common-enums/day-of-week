<?php

namespace PhpCommonEnums\DayOfWeek\Tests\Enumeration;

use PhpCommonEnums\DayOfWeek\Enumeration\DayOfWeekEnum;
use PHPUnit\Framework\TestCase;

class DayOfWeekEnumTest extends TestCase
{
    public function testExpectedLabels(): void
    {
        self::assertEquals(
            'Monday',
            DayOfWeekEnum::Monday->getLabel()
        );
        self::assertEquals(
            'Tuesday',
            DayOfWeekEnum::Tuesday->getLabel()
        );
        self::assertEquals(
            'Wednesday',
            DayOfWeekEnum::Wednesday->getLabel()
        );
        self::assertEquals(
            'Thursday',
            DayOfWeekEnum::Thursday->getLabel()
        );
        self::assertEquals(
            'Friday',
            DayOfWeekEnum::Friday->getLabel()
        );
        self::assertEquals(
            'Saturday',
            DayOfWeekEnum::Saturday->getLabel()
        );
        self::assertEquals(
            'Sunday',
            DayOfWeekEnum::Sunday->getLabel()
        );
    }

    public function testExpectedValues(): void
    {
        self::assertEquals(
            'Mon',
            DayOfWeekEnum::Monday->value
        );
        self::assertEquals(
            'Tue',
            DayOfWeekEnum::Tuesday->value
        );
        self::assertEquals(
            'Wed',
            DayOfWeekEnum::Wednesday->value
        );
        self::assertEquals(
            'Thu',
            DayOfWeekEnum::Thursday->value
        );
        self::assertEquals(
            'Fri',
            DayOfWeekEnum::Friday->value
        );
        self::assertEquals(
            'Sat',
            DayOfWeekEnum::Saturday->value
        );
        self::assertEquals(
            'Sun',
            DayOfWeekEnum::Sunday->value
        );
    }

    public function testExpectedNumeric(): void
    {
        self::assertEquals(
            1,
            DayOfWeekEnum::Monday->getNumeric()
        );
        self::assertEquals(
            2,
            DayOfWeekEnum::Tuesday->getNumeric()
        );
        self::assertEquals(
            3,
            DayOfWeekEnum::Wednesday->getNumeric()
        );
        self::assertEquals(
            4,
            DayOfWeekEnum::Thursday->getNumeric()
        );
        self::assertEquals(
            5,
            DayOfWeekEnum::Friday->getNumeric()
        );
        self::assertEquals(
            6,
            DayOfWeekEnum::Saturday->getNumeric()
        );
        self::assertEquals(
            0,
            DayOfWeekEnum::Sunday->getNumeric()
        );
        self::assertEquals(
            7,
            DayOfWeekEnum::Sunday->getNumeric(true)
        );
    }
}