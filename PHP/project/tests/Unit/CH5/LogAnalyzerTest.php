<?php

use PHPUnit\Framework\TestCase;

interface LoggerInterface
{
    public function LogError(string $message): void;
}

interface WebServiceInterface
{
    public function write($message): void;
}

//某個物件
class ErrorInfo
{
    public $severity;
    public $message;
    public function __construct($severity, $message)
    {
        $this->severity = $severity;
        $this->message = $message;
    }
}

class LogAnalyzer
{
    public $minNameLength;
    public $logger;
    public function __construct($logger)
    {
        $this->logger = $logger;
    }
    public function analyze($file_name)
    {
        if (strlen($file_name) < $this->minNameLength) {
            $this->logger->logError("Filename too short:" . $file_name);
        }
    }
}

class LogAnalyzer2
{
    public $minNameLength;
    public $logger;
    public $webService;
    public function __construct($logger, $webService)
    {
        $this->logger = $logger;
        $this->webService = $webService;
    }
    public function analyze($file_name)
    {
        if (strlen($file_name) < $this->minNameLength) {

            try {
                $this->logger->logError("Filename too short:" . $file_name);
            } catch (\Exception $e) {
                $this->webService->write("Error From Logger:" . $e);
            }
        }
    }
}

class LogAnalyzer3
{
    public $minNameLength;
    public $logger;
    public $webService;
    public function __construct($logger, $webService)
    {
        $this->logger = $logger;
        $this->webService = $webService;
    }
    public function analyze($file_name)
    {
        if (strlen($file_name) < $this->minNameLength) {

            try {
                $this->logger->logError("Filename too short:" . $file_name);
            } catch (\Exception $e) {
                $expected = new ErrorInfo(1000, "fake exception"); //多出屬性
                $this->webService->write($expected);
            }
        }
    }
}

class LogAnalyzerTest extends TestCase
{
    // public function test_all(){
    // $this->Analyze_TooShortFileName_CallLogger();
    // $this->Analyze_TooShortFileName_CallLogger_MockObject();
    // $this->Analyze_loggerThrows_CallsWebService();
    // $this->Analyze_loggerThrows_CallsWebServiceWithSubObject();
    // }


    //5-2手顆
    public function test_Analyze_TooShortFileName_CallLogger()
    {
        $logger = new FakeLogger();
        $analyzer = new LogAnalyzer($logger);
        $analyzer->minNameLength = 6;
        $analyzer->analyze("a.txt");
        $this->assertStringContainsString("too short", $logger->lastError);
    }

    //5-3使用框架
    public function test_Analyze_TooShortFileName_CallLogger_MockObject()
    {
        $logger = $this->createMock(LoggerInterface::class);
        $logger->expects($this->once())->method('logError')->with($this->equalTo("Filename too short:a.txt"));

        $analyzer = new LogAnalyzer($logger);
        $analyzer->minNameLength = 6;
        $analyzer->analyze("a.txt");
    }

    //5-6使用模擬物件 ＆ 虛設常式
    public function test_Analyze_loggerThrows_CallsWebService()
    {
        $mockService = $this->createMock(WebServiceInterface::class);
        $stubLogger = $this->createMock(LoggerInterface::class);
        $stubLogger->method("logError")->with($this->isType("string"))->will($this->throwException(new \Exception("fake exception")));
        $mockService->expects($this->once())->method("write")->with($this->stringContains("fake exception"));
        $analyzer = new LogAnalyzer2($stubLogger, $mockService);
        $analyzer->minNameLength = 10;
        $analyzer->analyze("Short.txt");
    }

    // 5.3驗證物件是帶著某些屬性的狀況
    public function test_Analyze_loggerThrows_CallsWebServiceWithSubObject()
    {
        $mockService = $this->createMock(WebServiceInterface::class);
        $stubLogger = $this->createMock(LoggerInterface::class);
        $stubLogger->method("logError")->with($this->isType("string"))->will($this->throwException(new \Exception("fake exception")));
        $expected = new ErrorInfo(1000, "fake exception"); //多出屬性
        $mockService->expects($this->once())->method("write")->with($expected);
        $analyzer = new LogAnalyzer3($stubLogger, $mockService);
        $analyzer->minNameLength = 10;
        $analyzer->analyze("Short.txt");
    }
}

//手顆
class FakeLogger implements LoggerInterface
{
    public $lastError;
    public function LogError(string $message): void
    {
        $this->lastError = $message;
    }
}
