<?php

namespace ConflictExample\Traits;

trait FileLogger
{
    public function log($msg)
    {
        $logFile = __DIR__ . '/../tsotsorelo_logs/app.log';
        file_put_contents($logFile, "[File] " . $msg . PHP_EOL, FILE_APPEND);
    }
}
