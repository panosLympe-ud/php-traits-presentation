<?php

namespace ConstructorExample\Traits;

trait ConnectTrait
{
    protected $connected = false;

    public function initConnection()
    {
        $this->connected = true;
        echo "Connection established" . PHP_EOL;
    }
}
