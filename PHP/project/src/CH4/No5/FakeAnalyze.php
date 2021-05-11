<?php
namespace Src\CH4\No5;

class FakeAnalyze implements IAnalyze
{
    public function analyze($fileName)
    {
        return true;
    }
}
