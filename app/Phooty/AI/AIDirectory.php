<?php
namespace App\Phooty\AI;

use App\Phooty\Concerns\HandlesIDs;
use Ramsey\Uuid\UuidInterface;


class AIDirectory implements \ArrayAccess
{
    use HandlesIDs;

    public function __construct(
        private array $directory
    ) {}

    /**
     * Check if the directory contains the player with the given ID
     *
     * @param string|UuidInterface $id
     *
     * @return bool
     */
    public function has($id): bool
    {
        $id = $this->handleID($id);
        return isset($this->directory[$id]);
    }

    /**
     * Get the AI for the given Player
     *
     * @param string|UuidInterface $id
     *
     * @throws \OutOfRangeException thrown if no player is found
     *
     * @return mixed
     */
    public function get(mixed $id): mixed
    {
        $id = $this->handleID($id);
        if (!$this->has($id)) {
            throw new \OutOfRangeException();
        }
        return $this->directory[$id];
    }

    public function offsetExists(mixed $offset): bool
    {
        return $this->has($offset);
    }

    /**
     * Get AI for given player id
     *
     * @param string|UuidInterface $offset
     *
     * @return mixed
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->get($offset);
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        // does nothing
    }

    public function offsetUnset(mixed $offset): void
    {
        // does nothing
    }
}
