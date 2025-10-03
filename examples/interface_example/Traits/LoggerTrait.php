<?php

namespace InterfaceExample\Traits;

trait LoggerTrait
{
    public function log($msg)
    {
        echo "[LOG]: " . $msg . PHP_EOL;
    }
}
