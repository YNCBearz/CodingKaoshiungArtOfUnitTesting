<?php

namespace Src\CH8\Sec2_5;

use PHPUnit\Framework\TestCase;

class OperatorTest extends TestCase
{

    /**
     * @test
     * @dataProvider ResultDataProvider
     */
    public function Sum($expected, $a, $b)
    {
        $Operator = new Operator();

        // Assert
        $this->assertEquals($expected, $Operator->sum($a, $b));
    }

    public function ResultDataProvider()
    {
        return [
            [0, 0, 0],
            [1, 1, 0],
            [2, 1, 1],
        ];
    }
}
