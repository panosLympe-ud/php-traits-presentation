<?php

namespace BasicExample;

require_once __DIR__ . '/Traits/Logger.php';

use BasicExample\Traits\Logger;

class User
{
    use Logger;

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->log("User {$this->name} created");
    }
}

$user = new User("PANAGIOTAROS");