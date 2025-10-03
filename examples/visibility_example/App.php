<?php

require_once __DIR__ . '/Traits/DebugTrait.php';

use VisibilityExample\Traits\DebugTrait;

class App
{
    use DebugTrait {
        debug as protected;
    }

    public function run()
    {
        $this->debug("App is running");
    }
}

$app = new App();
$app->run();
// $app->debug("Test"); // Houston we have a problem
