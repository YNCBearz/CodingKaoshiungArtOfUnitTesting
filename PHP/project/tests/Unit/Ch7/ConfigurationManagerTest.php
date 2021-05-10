<?php

namespace Tests\Unit\Ch7;

use PHPUnit\Framework\TestCase;
use Src\Ch7\ConfigurationManager;
use Src\Ch7\Loggers\NullLogger;
use Src\Ch7\LoggingFacility;

class ConfigurationManagerTest extends TestCase
{
    /**
     * @test
     */
    public function Analyze_NormalConfig_ReturnTrue()
    {
        $sut = new ConfigurationManager();
        $actual = $sut->isConfigured('database.php');
        $this->assertTrue($actual);
    }

    protected function setUp(): void
    {
        LoggingFacility::setLogger(new NullLogger());
    }

    protected function tearDown(): void
    {
        LoggingFacility::setLogger(null);
    }
}