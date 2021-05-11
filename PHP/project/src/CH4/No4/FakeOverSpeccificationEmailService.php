<?php
namespace Src\CH4\No4;

class FakeOverSpeccificationEmailService implements IEmailService
{
    public $emailInfo = null;
    public $checkCode = 'fakeTest';
    
    public function sentEmail($emailInfo)
    {
        $this->emailInfo = $emailInfo;
    }
}
