<?php

namespace Tests\Unit\CH4;

use Exception;
use PHPUnit\Framework\TestCase;
use Src\CH4\No4\FakeOverSpeccificationEmailService;
use Src\CH4\No4\FakeWebService;
use Src\CH4\No4\LogAnalyzer;
use Src\CH4\No4\EmailInfo;

class Analyze_TooShortFileName_ObjectFactory_4_5_Test extends TestCase
{
    /**
     * @test
     */
    public function Analyze_TooShortFileName_CallWebServiceThrow_SentEmail()
    {
        $stubFakeService = new FakeWebService;
        $stubFakeService->toThrow = new Exception("Fake Exception");
        $fakeEmailService = new FakeOverSpeccificationEmailService;
        $log = new LogAnalyzer($stubFakeService, $fakeEmailService);
        $fileName = 'abc.txt';
        $log->analyze($fileName);
       
        $emailInfo = new EmailInfo('test@who.com', 'can`t log', "Fake Exception");
        
        $this->assertEquals($emailInfo, $fakeEmailService->emailInfo);
        $this->assertEquals('fakeTest', $fakeEmailService->checkCode);
    }
}
