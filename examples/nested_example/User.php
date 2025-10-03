<?php

require_once __DIR__ . '/Traits/IdentifiableTrait.php';
require_once __DIR__ . '/Traits/TimestampableTrait.php';
require_once __DIR__ . '/Traits/UserTrait.php';

use NestedExample\Traits\UserTrait;

class User
{
    use UserTrait;
}

$user = new User();
$user->setId(101);
$user->setName("PANAGIOTAROS");

echo "ID: " . $user->getId() . PHP_EOL;
echo "Name: " . $user->getName() . PHP_EOL;
echo "Created At: " . $user->getCreatedAt() . PHP_EOL;
