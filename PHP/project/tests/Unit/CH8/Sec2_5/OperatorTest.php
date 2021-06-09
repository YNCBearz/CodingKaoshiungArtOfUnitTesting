<?php

namespace Src\CH8\Sec2_5;

use PHPUnit\Framework\TestCase;

class OperatorTest extends TestCase
{

    /**
     * @test
     */
    public function Sum()
    {
        $Operator = new Operator();

        // Assert
        $this->assertEquals(0, $Operator->sum(0, 0));
        $this->assertEquals(1, $Operator->sum(1, 0));
        $this->assertEquals(2, $Operator->sum(1, 1));
    }
}
