<?php

namespace Tests\Unit\Ch7;

use DateTime;
use PHPUnit\Framework\TestCase;
use Src\Ch7\SystemTime;
use Src\Ch7\TimeLogger;

class TimeLoggerTest extends TestCase
{
    /**
     * @test
     */
    public function SettingSystemTime_Always_ChangesTime()
    {
        SystemTime::set((new DateTime('2000-04-14')));
        $actual = TimeLogger::createMessage('Hello World');
        $this->assertStringContainsString('2000-04-14', $actual);
    }

    protected function tearDown(): void
    {
        SystemTime::reset();
    }
}
