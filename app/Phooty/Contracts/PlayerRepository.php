<?php
namespace App\Phooty\Contracts;

use IteratorAggregate;
use Ramsey\Uuid\UuidInterface;

/**
 * A PlayerRepository holds all the player objects associated with a specific Team, akin to a real
 * world team's playing list.
 *
 * The repository must contain all player objects required for a simulation, but may contain more.
 */
interface PlayerRepository extends IteratorAggregate
{
    /**
     * Check if a Player with the given id exists in this Repository
     *
     * The method should be able to handle either a string or Uuid object.
     *
     * @param string|UuidInterface $id
     *
     * @return bool
     */
    public function hasPlayer($id): bool;

    /**
     * Get the Player object with the given ID.
     *
     * The method should be able to handle either a string or Uuid object.
     * Should return null if no player is found.
     *
     * @param string|UuidInterface $id
     *
     * @return Player|null
     */
    public function getPlayer($id): ?Player;

    /**
     * Get the ID of the team the repository belongs to.
     *
     * @return UuidInterface
     */
    public function getTeamId(): UuidInterface;
}
