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
        $expected_log = new Log('file', 'this is output content', '2021-05-29');

        //Actual
        $actual = $LogAnalyzer->output();

        //Assert
        $this->assertEquals($expected_log, $actual);
    }
}
