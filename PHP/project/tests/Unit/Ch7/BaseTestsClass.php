<?php

namespace Tests\Unit\Ch7;

use PHPUnit\Framework\TestCase;
use Src\Ch7\Loggers\NullLogger;
use Src\Ch7\LoggingFacility;

class BaseTestsClass extends TestCase
{
    protected function fakeTheLogger(): void
    {
        LoggingFacility::setLogger(new NullLogger());
    }

    protected function tearDown(): void
    {
        LoggingFacility::setLogger(null);
    }

}