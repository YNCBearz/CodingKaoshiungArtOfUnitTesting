<?php

namespace Src\CH8\Sec2_7;

use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{

    /**
     * @test
     */
    public function PayMoney_NotSuggest()
    {
        //Arrange
        $mockPay = $this->createMock(Pay::class);
        $Payment = new Payment($mockPay);
        $mockPay->expects($this->once())
            ->method('pay')
            ->with('credit_card', 100)
            ->willReturn(true);

        //Actual
        $actual = $Payment->payMoney('credit_card', 100);

        //Assert
        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function PayMoney_Suggest()
    {
        //Arrange
        $stubPay = $this->createStub(Pay::class);
        $Payment = new Payment($stubPay);
        $stubPay->method('pay')
            ->willReturn(true);

        //Actual
        $actual = $Payment->payMoney('credit_card', 100);

        //Assert
        $this->assertTrue($actual);
    }
}
