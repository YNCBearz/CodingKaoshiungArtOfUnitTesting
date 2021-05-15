<?php


use PHPUnit\Framework\TestCase;
use Src\CH6\Sec3_2\Target;
use Src\CH6\Sec3_2\WantStub;

class TargetTest extends TestCase
{

    /**
     * @test
     */
    public function MethodBeTest_StubWantStub()
    {
        //Arrange
        $WantStub = $this->createStub(WantStub::class);
        // 參數都不填寫，強制讓他回傳'參數忽略！'
        $WantStub->method('methodUsed')->willReturn('參數忽略！');
        $Target = new Target($WantStub);

        //Act
        $actual = $Target->methodBeTest();

        //Assert
        var_dump($actual);
        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function MethodBeTest_RealWantStub()
    {
        $Target = new Target(new WantStub());
        $actual = $Target->methodBeTest();

        var_dump($actual);

        $this->assertFalse($actual);
    }
}
