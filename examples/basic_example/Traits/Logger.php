<?php

namespace BasicExample\Traits;

trait Logger
{
    public function log($msg)
    {
        echo "[LOG]: " . $msg . PHP_EOL;
    }
}
