<?php

namespace Src\Ch7;

use DateTime;

class TimeLogger
{
    public static function createMessage(string $info)
    {
        $dateTime = new DateTime();
        return $dateTime->format("Y-m-d H:i:s")." ".$info;
    }
}