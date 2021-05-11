<?php

namespace Tests\Unit\CH4;

use Exception;
use PHPUnit\Framework\TestCase;
use Src\CH4\No2\FakeEmailService;
use Src\CH4\No2\FakeWebService;
use Src\CH4\No2\LogAnalyzer;

class Analyze_TooShortFileName_CallWebServiceThrow_SentEmail_4_4_1_Test extends TestCase
{
    /**
     * @test
     */
    public function Analyze_TooShortFileName_CallWebServiceThrow_SentEmail()
    {
        $stubFakeService = new FakeWebService;
        $stubFakeService->toThrow = new Exception("Fake Exception");
        $fakeEmailService = new FakeEmailService;
        $log = new LogAnalyzer($stubFakeService, $fakeEmailService);
        $fileName = 'abc.txt';
        $log->analyze($fileName);

        $this->assertEquals('test@who.com', $fakeEmailService->to);
        $this->assertEquals('can`t log', $fakeEmailService->subject);
        $this->assertEquals('Fake Exception', $fakeEmailService->body);
    }
}
