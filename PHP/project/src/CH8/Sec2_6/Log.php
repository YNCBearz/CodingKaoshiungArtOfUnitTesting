<?php

namespace Src\CH8\Sec2_6;


class Log
{
    public $driver;
    public $content;
    public $createdTime;

    public function __construct(string $driver, string $content, string $createdTime)
    {
        $this->driver = $driver;
        $this->content = $content;
        $this->createdTime = $createdTime;
    }
}
