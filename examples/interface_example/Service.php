<?php

require_once __DIR__ . '/Interfaces/Loggable.php';
require_once __DIR__ . '/Traits/LoggerTrait.php';

use InterfaceExample\Interfaces\Loggable;
use InterfaceExample\Traits\LoggerTrait;

class Service implements Loggable
{
    use LoggerTrait;
}

$service = new Service();
$service->log("Hello from Service");
