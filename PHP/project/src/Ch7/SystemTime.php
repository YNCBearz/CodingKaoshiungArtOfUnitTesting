<?php

namespace Src\Ch7;

use DateTime;

class SystemTime extends DateTime
{
    /**
     * @var DateTime
     */
    private static $date;

    public static function set(DateTime $custom)
    {
        static::$date = $custom;
    }

    public static function reset()
    {
        $dateTime = new DateTime();
        $minValue = $dateTime->setTimestamp(0);

        static::$date = $minValue;
    }

    public static function now(): string
    {
        $dateTime = new DateTime();
        $minValue = $dateTime->setTimestamp(0);

        if (!is_null(static::$date) && static::$date != $minValue) {
            return static::$date->format("Y-m-d H:i:s");
        }

        return $dateTime->format("Y-m-d H:i:s");
    }
}