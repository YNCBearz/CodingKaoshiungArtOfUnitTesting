<?php

namespace Tests\Unit\CH5;

use PHPUnit\Framework\TestCase;

interface FileNameRulesInterface
{
    public function isValidLogFileName(string $message): bool;
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


class ReturnsTest extends TestCase
{
    //輸入指定參數5-4
    public function test_Returns_ByDefault_WorksForHardCodeArgument()
    {
        $fakeRules = $this->createMock(FileNameRulesInterface::class);
        $fakeRules->method('isValidLogFileName')->with($this->equalTo("strict.txt"))->willReturn(true);
        $this->assertTrue($fakeRules->isValidLogFileName("strict.txt"));
    }

    //忽略參數內容
    public function test_Returns_ByDefault_WorksForAnyArgument()
    {
        $fakeRules = $this->createMock(FileNameRulesInterface::class);
        $fakeRules->method('isValidLogFileName')->with($this->isType('string'))->willReturn(true);
        $this->assertTrue($fakeRules->isValidLogFileName("strict.txt"));
    }

    //拋出例外
    public function test_Returns_ArgAny_Throws()
    {
        $this->expectException(\Exception::class);
        $fakeRules = $this->createMock(FileNameRulesInterface::class);
        $fakeRules->method('isValidLogFileName')->with($this->isType('string'))->will($this->throwException(new \Exception));
        $fakeRules->isValidLogFileName('123123');
    }
}
