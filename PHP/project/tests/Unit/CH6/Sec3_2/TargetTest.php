<?php


use PHPUnit\Framework\TestCase;
use Src\CH6\Sec3_2\Pay;
use Src\CH6\Sec3_2\Payment;

class TargetTest extends TestCase
{

    /**
     * @test
     */
    public function MethodBeTest_StubWantStub()
    {
        //Arrange
        $stubPay = $this->createStub(Pay::class);
        // 參數都不填寫，強制讓他回傳'參數忽略！'
        $stubPay->method('byCreditCard')->willReturn('參數忽略！');
        $Payment = new Payment($stubPay);

        //Act
        $actual = $Payment->payByCreditCard();

        //Assert
        var_dump($actual);
        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function MethodBeTest_RealWantStub()
    {
        $Payment = new Payment(new Pay());
        $actual = $Payment->payByCreditCard();

        var_dump($actual);

        $this->assertFalse($actual);
    }
}
