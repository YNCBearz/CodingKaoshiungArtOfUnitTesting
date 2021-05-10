<?php

namespace Tests\Unit\Ch7;

use PHPUnit\Framework\TestCase;
use Src\Ch7\LogAnalyzer;
use Src\Ch7\Exceptions\FileNameTooShortException;
use Src\Ch7\Loggers\NullLogger;
use Src\Ch7\LoggingFacility;

class LogAnalyzerTest extends TestCase
{
    /**
     * @test
     */
    public function Analyze_EmptyFile_ThrowsException()
    {
        $sut = new LogAnalyzer();
        $this->expectException(FileNameTooShortException::class);
        $sut->analyze('aaa.txt');
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