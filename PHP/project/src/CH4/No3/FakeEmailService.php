<?php
namespace Src\CH4\No3;

class FakeEmailService implements IEmailService
{
    public $emailInfo = null;
    
    public function sentEmail($emailInfo)
    {
        $this->emailInfo = $emailInfo;
    }
}
