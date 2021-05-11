<?php
namespace Src\CH4\No4;

class EmailInfo
{
    public $to;
    public $subject;
    public $body;
    
    public function __construct($to, $subject, $body)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
    }
}
