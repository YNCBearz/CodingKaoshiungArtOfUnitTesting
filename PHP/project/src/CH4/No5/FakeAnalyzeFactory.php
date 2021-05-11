<?php
namespace Src\CH4\No5;

class FakeAnalyzeFactory implements IAnalyzeFactory
{
    public function getAnalyzeMethod($type)
    {
        return new FakeAnalyze;
    }
}
