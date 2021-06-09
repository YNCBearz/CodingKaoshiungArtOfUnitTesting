<?php

namespace Tests\Unit\Ch7;

use Src\Ch7\LogAnalyzer;
use Src\Ch7\Exceptions\FileNameTooShortException;

class LogAnalyzerTest extends BaseTestsClass
{
    /**
     * @test
     */
    public function Analyze_EmptyFile_ThrowsException()
    {
        $this->fakeTheLogger();
        $sut = new LogAnalyzer();
        $this->expectException(FileNameTooShortException::class);
        $sut->analyze('aaa.txt');
    }

}