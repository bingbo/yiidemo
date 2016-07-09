<?php
namespace Services\HelloSwoole;

class Handler implements HelloSwooleIf
{
    public function sendMessage(\Services\HelloSwoole\Message $msg)
    {
        var_dump($msg);
        return RetCode::PARAM_ERROR;
    }
}