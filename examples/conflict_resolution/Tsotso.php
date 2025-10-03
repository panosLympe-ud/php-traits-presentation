<?php

require_once __DIR__ . '/Traits/ConsoleLogger.php';
require_once __DIR__ . '/Traits/FileLogger.php';

use ConflictExample\Traits\ConsoleLogger;
use ConflictExample\Traits\FileLogger;

class Tsotso
{
    use ConsoleLogger, FileLogger {
        FileLogger::log insteadof ConsoleLogger;
        ConsoleLogger::log as consoleLog;
    }

    public function run()
    {
        $this->log("Application started");
        $this->consoleLog("Application started");
    }
}

$app = new Tsotso();
$app->run();
