<?php

namespace Src\Ch7\Loggers;

use Src\Ch7\Contracts\ILogger;

class FileLogger implements ILogger
{
    public function log(string $text)
    {
        echo "將 [$text] 記錄在.log檔中";
    }

}