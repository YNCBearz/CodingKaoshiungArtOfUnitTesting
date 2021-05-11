<?php
namespace Src\CH4\No1;

class MockWebService implements IWebService
{
    public $lastError;
    
    public function logError($message)
    {
        return $this->lastError = $message;
    }
}
