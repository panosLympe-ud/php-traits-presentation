<?php

namespace ConflictExample\Traits;

trait ConsoleLogger
{
    public function log($msg)
    {
        echo "[Console] " . $msg . PHP_EOL;
    }
}
