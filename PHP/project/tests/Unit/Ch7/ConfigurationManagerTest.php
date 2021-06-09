<?php

namespace Tests\Unit\Ch7;

use Src\Ch7\ConfigurationManager;

class ConfigurationManagerTest extends BaseTestsClass
{
    /**
     * @test
     */
    public function Analyze_NormalConfig_ReturnTrue()
    {
        $this->fakeTheLogger();
        $sut = new ConfigurationManager();
        $actual = $sut->isConfigured('database.php');
        $this->assertTrue($actual);
    }
}