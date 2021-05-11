<?php
namespace Src\CH4\No5;

class LogAnalyzer
{
    private $webService;
    private $emailService;

    public function __construct(IWebService $service, IEmailService $email, IAnalyzeFactory $factory)
    {
        $this->webService = $service;
        $this->emailService = $email;
        $this->factory = $factory;
    }

    public function analyze($fileName, $type)
    {
        $factory = $this->factory->getAnalyzeMethod($type);

        if ($factory->analyze($fileName)) {
            try {
                $this->webService->LogError('Filename too short:'.$fileName);
            } catch (\Exception $e) {
                $emailInfo = new EmailInfo('test@who.com', 'can`t log', $e->getMessage());
                $this->emailService->sentEmail($emailInfo);
            }
        }
    }
}
