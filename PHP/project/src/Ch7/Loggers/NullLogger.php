<?php

namespace Src\Ch7\Loggers;

use Src\Ch7\Contracts\ILogger;

class NullLogger implements ILogger
{
    public function log(string $text)
    {
        echo "將 [$text] 記錄在記憶體中（不產生實體檔案）";
    }
}