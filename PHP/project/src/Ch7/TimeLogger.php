<?php

namespace Src\Ch7;

class TimeLogger
{
    public static function createMessage(string $info): string
    {
        return SystemTime::now()." ".$info;
    }

}