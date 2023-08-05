<?php
namespace App\Phooty\Concerns;

use App\Phooty\Exceptions\InvalidIDException;
use Ramsey\Uuid\UuidInterface;

trait HandlesIDs
{
    protected function handleID(mixed $id)
    {
        if (is_string($id)) return $id;
        if ($id instanceof UuidInterface) return $id->toString();

        throw new InvalidIDException(
            'Invalid ID type'
        );
    }
}
