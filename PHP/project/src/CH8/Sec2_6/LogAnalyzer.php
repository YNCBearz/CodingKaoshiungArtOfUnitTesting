<?php

namespace Src\CH8\Sec2_6;

class LogAnalyzer
{
    public function output(): Log
    {
        return new Log('file', 'this is output content', '2021-05-29');
    }
}
