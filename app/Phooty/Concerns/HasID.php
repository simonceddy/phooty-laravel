<?php
namespace App\Phooty\Concerns;

use Ramsey\Uuid\{Uuid, UuidInterface};

trait HasID
{
    protected UuidInterface $id;

    public function getId(): UuidInterface
    {
        if (!isset($this->id)) {
            $this->id = Uuid::uuid4();
        }

        return $this->id;
    }
}
