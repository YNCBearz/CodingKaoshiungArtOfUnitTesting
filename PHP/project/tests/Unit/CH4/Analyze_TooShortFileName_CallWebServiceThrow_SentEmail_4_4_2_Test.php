<?php

namespace Tests\Unit\CH4;

use Exception;
use PHPUnit\Framework\TestCase;
use Src\CH4\No3\FakeEmailService;
use Src\CH4\No3\FakeWebService;
use Src\CH4\No3\LogAnalyzer;
use Src\CH4\No3\EmailInfo;

class Analyze_TooShortFileName_CallWebServiceThrow_SentEmail_4_4_2_Test extends TestCase
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
       
        $emailInfo = new EmailInfo('test@who.com', 'can`t log', "Fake Exception");
        
        $this->assertEquals($emailInfo, $fakeEmailService->emailInfo);
    }
}
