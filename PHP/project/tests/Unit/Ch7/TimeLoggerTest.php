<?php

namespace Tests\Unit\Ch7;

use Src\Ch7\TimeLogger;
use PHPUnit\Framework\TestCase;

class TimeLoggerTest extends TestCase
{
    public function testCreateMessage()
    {
        $result = TimeLogger::createMessage('abc');
        var_dump($result);
        $this->assertTrue(true);
    }
}
