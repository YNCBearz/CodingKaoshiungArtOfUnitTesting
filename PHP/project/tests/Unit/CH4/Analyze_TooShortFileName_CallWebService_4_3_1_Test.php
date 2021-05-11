<?php

namespace Tests\Unit\CH4;

use PHPUnit\Framework\TestCase;
use Src\CH4\No1\LogAnalyzer;
use Src\CH4\No1\MockWebService;

class Analyze_TooShortFileName_CallWebService_4_3_1_Test extends TestCase
{
    /**
     * @test
     */
    public function Analyze_TooShortFileName_CallWebService()
    {
        $mockService = new MockWebService;
        $log = new LogAnalyzer($mockService);
        $fileName = 'abc.txt';
        $log->analyze($fileName);

        $this->assertEquals('Filename too short:'.$fileName, $mockService->lastError);
    }
}
