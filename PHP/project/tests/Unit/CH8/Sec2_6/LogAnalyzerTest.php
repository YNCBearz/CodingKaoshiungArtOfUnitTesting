<?php

namespace Src\CH8\Sec2_6;

use PHPUnit\Framework\TestCase;

class LogAnalyzerTest extends TestCase
{

    /**
     * @test
     */
    public function Output()
    {
        //Arrange
        $LogAnalyzer = new LogAnalyzer();
        $expected_driver = 'file';
        $expected_content = 'this is output content';
        $expected_createdTime = '2021-05-29';

        //Actual
        $actual = $LogAnalyzer->output();

        //Assert
        $this->assertEquals($expected_driver, $actual->driver);
        $this->assertEquals($expected_content, $actual->content);
        $this->assertEquals($expected_createdTime, $actual->createdTime);
    }
}
