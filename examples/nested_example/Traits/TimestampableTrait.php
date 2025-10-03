<?php

namespace NestedExample\Traits;

trait TimestampableTrait
{
    private $createdAt;

    public function setCreatedAt()
    {
        $this->createdAt = date('Y-m-d H:i:s');
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
