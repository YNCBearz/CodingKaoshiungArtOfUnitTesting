<?php
namespace Src\CH4\No3;

class FakeWebService implements IWebService
{
    public $toThrow;
    
    public function logError($message)
    {
        throw $this->toThrow;
    }
}
