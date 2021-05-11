<?php
namespace Src\CH4\No1;

class LogAnalyzer
{
    private $IWebService;

    public function __construct(IWebService $service)
    {
        $this->IWebService = $service;
    }

    public function analyze($fileName)
    {
        if (strlen($fileName)<8) {
            $this->IWebService->LogError('Filename too short:'.$fileName);
        }
    }
}
