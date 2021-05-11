<?php
namespace Src\CH4\No3;

class LogAnalyzer
{
    private $webService;
    private $emailService;

    public function __construct(IWebService $service, IEmailService $email)
    {
        $this->webService = $service;
        $this->emailService = $email;
    }

    public function analyze($fileName)
    {
        if (strlen($fileName)<8) {
            try {
                $this->webService->LogError('Filename too short:'.$fileName);
            } catch (\Exception $e) {
                $emailInfo = new EmailInfo('test@who.com', 'can`t log', $e->getMessage());
                $this->emailService->sentEmail($emailInfo);
            }
        }
    }
}
