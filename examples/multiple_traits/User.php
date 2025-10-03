<?php

namespace MultipleTraits;

require_once __DIR__ . '/Traits/Logger.php';
require_once __DIR__ . '/Traits/Timestampable.php';

use MultipleTraits\Traits\Logger;
use MultipleTraits\Traits\Timestampable;

class User
{
    use Logger, Timestampable;

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->setCreatedAt();
        $this->log("User {$this->name} created at " . $this->getCreatedAt());
    }
}

$user = new User("PANAGIOTAROS");