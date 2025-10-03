<?php

require_once __DIR__ . '/Traits/AuthTrait.php';

use AbstractExample\Traits\AuthTrait;

class Admin
{
    use AuthTrait;

    public function hasAccess(): bool
    {
        return $this->getRole() === 'admin';
    }
}

$admin = new Admin();
$admin->setRole('admin');

echo $admin->hasAccess()
    ? "Access granted" . PHP_EOL
    : "Access denied" . PHP_EOL;
