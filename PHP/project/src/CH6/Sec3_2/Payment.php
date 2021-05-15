<?php


namespace Src\CH6\Sec3_2;


use Src\CH6\Sec3_1\Person;

class Payment
{
    /**
     * @var Pay
     */
    private $pay;

    public function __construct(Pay $pay)
    {
        $this->pay = $pay;
    }

    public function payByCreditCard(): bool
    {
        $result = $this->pay->byCreditCard([], 'str', 0, new Person());
        if ($result == '參數忽略！') {
            return true;
        } else {
            return false;
        }
    }
}
