<?php
namespace Src\CH4\No4;

class FakeWebService implements IWebService
{
    public $toThrow;
    
    public function logError($message)
    {
        throw $this->toThrow;
    }
}
