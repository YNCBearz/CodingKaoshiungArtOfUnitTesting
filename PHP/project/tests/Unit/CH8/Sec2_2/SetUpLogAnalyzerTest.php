<?php


namespace Tests\Unit\CH8\Sec2_2;


use PHPUnit\Framework\TestCase;
use Src\CH8\Sec2_2\LogAnalyzer;

class SetUpLogAnalyzerTest extends TestCase
{
    /**
     * @var LogAnalyzer
     */
    private $LogAnalyzer;

    public function setUp(): void
    {
        parent::setUp();
        $this->LogAnalyzer = new LogAnalyzer();
        $this->LogAnalyzer->initialize();
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

}
