<?php

namespace NestedExample\Traits;

trait UserTrait
{
    use IdentifiableTrait, TimestampableTrait;

    private $name;

    public function setName($name)
    {
        $this->name = $name;
        $this->setCreatedAt(); // κάθε φορά που αλλάζει το όνομα, ορίζουμε createdAt
    }

    public function getName()
    {
        return $this->name;
    }
}
