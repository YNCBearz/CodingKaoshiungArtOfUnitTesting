<?php

namespace Src\CH8\Sec2_2;


use Exception;

class LogAnalyzer
{
    /**
     * @var bool $initialize 是否初始化
     */
    private $initialize = false;

    public function initialize(): void
    {
        // do something initialize
        $this->initialize = true;
    }

    public function isValid(string $fileName): bool
    {
        if ( ! $this->initialize) {
            throw new Exception('not initialize');
        }

        if (strlen($fileName) < 8) {
            return true;
        }
        return false;
    }
}
