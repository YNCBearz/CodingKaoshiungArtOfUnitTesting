<?php


namespace Src\CH6\Sec3_2;


use Src\CH6\Sec3_1\Person;

class Target
{
    /**
     * @var WantStub
     */
    private $stub;

    public function __construct(WantStub $stub)
    {
        $this->stub = $stub;
    }

    public function methodBeTest(): bool
    {
        $result = $this->stub->methodUsed([], 'str', 0, new Person());
        if ($result == '參數忽略！') {
            return true;
        } else {
            return false;
        }
    }
}
