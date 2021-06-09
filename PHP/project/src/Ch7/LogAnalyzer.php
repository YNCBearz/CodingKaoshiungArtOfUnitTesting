<?php

namespace Src\Ch7;

use Exception;
use Src\Ch7\Exceptions\FileNameTooShortException;

class LogAnalyzer
{
    /**
     * @param string $fileName
     * @throws Exception
     */
    public function analyze(string $fileName)
    {
        if (strlen($fileName) < 8) {
            LoggingFacility::log("Filename too short:".$fileName);
            throw new FileNameTooShortException();
        }

        //其他的內容
    }

}