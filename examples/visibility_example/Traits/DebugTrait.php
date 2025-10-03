<?php

namespace VisibilityExample\Traits;

trait DebugTrait
{
    public function debug($msg)
    {
        echo "[DEBUG] " . $msg . PHP_EOL;
    }
}
