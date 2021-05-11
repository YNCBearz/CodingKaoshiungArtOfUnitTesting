<?php
namespace Src\CH4\No2;

class FakeEmailService implements IEmailService
{
    public $to;
    public $subject;
    public $body;
    
    public function sentEmail($to, $subject, $body)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
    }
}
