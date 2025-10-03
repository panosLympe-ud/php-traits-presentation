<?php

namespace AbstractExample\Traits;

trait AuthTrait
{
    private $role;

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    abstract public function hasAccess(): bool;
}
