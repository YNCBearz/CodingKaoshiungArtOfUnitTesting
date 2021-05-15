<?php

namespace Src\CH6\Sec3_2;

use Src\CH6\Sec3_1\Humanable;

class WantStub
{
    public function methodUsed(array $arr, string $str, int $number, Humanable $person): string
    {
        return '真實回傳';
    }
}
