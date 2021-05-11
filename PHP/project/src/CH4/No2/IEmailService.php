<?php
namespace Src\CH4\No2;

interface IEmailService
{
    public function sentEmail($to, $subject, $body);
}
