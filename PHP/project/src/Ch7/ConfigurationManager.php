<?php

namespace Src\Ch7;

class ConfigurationManager
{
    public function isConfigured(string $configName)
    {
        LoggingFacility::log("checking ".$configName);
        return true;
    }

}