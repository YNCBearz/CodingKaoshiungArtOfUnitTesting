<?php

namespace Tests\Unit\CH8\Sec2_3;

use PHPUnit\Framework\TestCase;
use Src\CH8\Sec2_2\LogAnalyzer;

class LogAnalyzerTest extends TestCase
{
    /**
     * @var LogAnalyzer
     */
    private $LogAnalyzer;

    private $file_info;

    public function setUp(): void
    {
        parent::setUp();
        $this->LogAnalyzer = new LogAnalyzer();
        $this->LogAnalyzer->initialize();
        $this->file_info = 'c://someFile.txt';
    }

    /**
     * @test
     */
    public function IsValid_LengthBiggerThan8_IsFalse(): void
    {
        //Arrange
        $filename = '123456789';

        //Actual
        $actual = $this->LogAnalyzer->isValid($filename);

        //Assert
        $this->assertFalse($actual);
    }

    /**
     * @test
     */
    public function IsValid_LengthSmallerThan8_IsTrue(): void
    {    //Arrange
        $filename = '1234567';

        //Actual
        $actual = $this->LogAnalyzer->isValid($filename);

        //Assert
        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function IsValid_BadFileInfoInput_ReturnsFalse(): void
    {    //Arrange
        $filename = $this->file_info;

        //Actual
        $actual = $this->LogAnalyzer->isValid($filename);

        //Assert
        $this->assertFalse($actual);
    }
}
