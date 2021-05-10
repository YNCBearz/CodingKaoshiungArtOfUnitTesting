<?php

namespace Src\Ch7;

use Src\Ch7\Contracts\ILogger;
use Src\Ch7\Loggers\FileLogger;

class LoggingFacility
{
    /**
     * @var ILogger|null
     */
    private static $logger;

    public static function log(string $text)
    {
        if (is_null(static::$logger)) {
            static::$logger = new FileLogger();
        }
        static::$logger->log($text);
    }

    public static function getLogger(): ILogger
    {
        return static::$logger;
    }

    /**
     * @param ILogger|null $logger
     */
    public static function setLogger(?ILogger $logger)
    {
        static::$logger = $logger;
    }
}