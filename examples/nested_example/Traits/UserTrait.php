<?php

namespace NestedExample\Traits;

trait UserTrait
{
    use IdentifiableTrait, TimestampableTrait;

    private $name;

    public function setName($name)
    {
        $this->name = $name;
        $this->setCreatedAt();
    }

    public function getName()
    {
        return $this->name;
    }
}
