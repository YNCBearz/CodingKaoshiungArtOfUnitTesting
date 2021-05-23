<?php

namespace Src\CH8\Sec2_2;


class BeforeLogAnalyzer
{
    public function isValid(string $fileName): bool
    {
        if (strlen($fileName) < 8) {
            return true;
        }
        return false;
    }
}
