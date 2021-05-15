<?php

namespace Src\CH6\Sec3_2;

use Src\CH6\Sec3_1\Humanable;

class Pay
{
    public function byCreditCard(array $order_list, string $credit_card_no, int $money, Humanable $user): string
    {
        return '真實回傳';
    }
}
