<?php

namespace Tests\Unit\CH4;

use Exception;
use PHPUnit\Framework\TestCase;
use Src\CH4\No5\EmailInfo;
use Src\CH4\No5\FakeAnalyzeFactory;
use Src\CH4\No5\FakeOverSpeccificationEmailService;
use Src\CH4\No5\FakeWebService;
use Src\CH4\No5\LogAnalyzer;

class Analyze_TooShortFileName_CallWebServiceThrow_SentEmail_OverSepecofication_4_6_Test extends TestCase
{
    /**
     * @test
     */
    public function Analyze_TooShortFileName_CallWebServiceThrow_SentEmail()
    {
        $stubFakeService = new FakeWebService;
        $stubFakeService->toThrow = new Exception("Fake Exception");
        $fakeEmailService = new FakeOverSpeccificationEmailService;
        $factory = new FakeAnalyzeFactory('test');
        $log = new LogAnalyzer($stubFakeService, $fakeEmailService, $factory);
        $fileName = 'abc.txt';
        $log->analyze($fileName, 'test');
       
        $emailInfo = new EmailInfo('test@who.com', 'can`t log', "Fake Exception");
        
        $this->assertEquals($emailInfo, $fakeEmailService->emailInfo);
        $this->assertEquals('fakeTest', $fakeEmailService->checkCode);
    }
}
