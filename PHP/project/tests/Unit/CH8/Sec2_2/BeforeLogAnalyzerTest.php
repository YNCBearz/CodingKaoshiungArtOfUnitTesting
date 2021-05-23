<?php

namespace Tests\Unit\CH8\Sec2_2;


use PHPUnit\Framework\TestCase;
use Src\CH8\Sec2_2\BeforeLogAnalyzer;

class BeforeLogAnalyzerTest extends TestCase
{

    /**
     * @test
     */
    public function IsValid_LengthBiggerThan8_IsFalse(): void
    {
        //Arrange
        $filename = '123456789';
        $LogAnalyzer = new BeforeLogAnalyzer();

        //Actual
        $actual = $LogAnalyzer->isValid($filename);

        //Assert
        $this->assertFalse($actual);
    }

    /**
     * @test
     */
    public function IsValid_LengthSmallerThan8_IsTrue(): void
    {    //Arrange
        $filename = '1234567';
        $LogAnalyzer = new BeforeLogAnalyzer();

        //Actual
        $actual = $LogAnalyzer->isValid($filename);

        //Assert
        $this->assertTrue($actual);
    }
}
