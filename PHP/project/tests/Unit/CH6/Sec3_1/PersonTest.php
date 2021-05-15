<?php


use PHPUnit\Framework\TestCase;
use Src\CH6\Sec3_1\Humanable;
use Src\CH6\Sec3_1\Person;

class PersonTest extends TestCase
{

    /**
     * @test
     */
    public function GeneratePerson()
    {
        $stubPerson = $this->createStub(Person::class);

        // generatePerson() 會返回假的 Humanable

        $this->assertInstanceOf(
            Humanable::class,
            $stubPerson->generatePerson()
        );

        $this->assertInstanceOf(
            Humanable::class,
            $stubPerson->generatePerson()->generatePerson()
        );

        $this->assertInstanceOf(
            Humanable::class,
            $stubPerson->generatePerson()->generatePerson()->generatePerson()
        );
    }
}
