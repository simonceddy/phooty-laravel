<?php
namespace App\Phooty\Concerns;

use Ramsey\Uuid\UuidInterface;

trait HasID
{
    protected UuidInterface $id;

    public function getId()
    {
        return $this->id;
    }
}
