<?php

namespace Src\CH8\Sec2_7;


class Payment
{
    private $pay;

    public function __construct(Pay $pay)
    {
        $this->pay = $pay;
    }

    public function payMoney(string $way, int $money): bool
    {
        $result = $this->pay->pay($way, $money);
        if ($result == true) {
            return true;
        }
        return false;
    }
}
