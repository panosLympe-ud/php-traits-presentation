<?php

require_once __DIR__ . '/Traits/ConnectTrait.php';

use ConstructorExample\Traits\ConnectTrait;

class Database
{
    use ConnectTrait;

    public function __construct()
    {
        $this->initConnection();
    }
}

$db = new Database();
