<?php

namespace Src\CH8\Sec2_7;


class Pay
{
    public function pay(string $way, int $money): bool
    {
        echo 'pay money : ' . $money . PHP_EOL;
        switch ($way) {
            case 'credit_card':
                return true;
                break;
            case 'real_money':
                return true;
                break;
        }
        return false;
    }
}
