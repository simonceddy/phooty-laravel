<?php
namespace App\Phooty\Contracts;

use Ramsey\Uuid\UuidInterface;

/**
 * A Player object represents a footy player
 */
interface Player extends Identifiable
{
    /**
     * Get the player's first name
     *
     * @return string
     */
    public function getFirstName(): string;

    /**
     * Get the player's surname
     *
     * @return string
     */
    public function getSurname(): string;

    /**
     * Get the player's nickname if set, null otherwise.
     *
     * @return string|null
     */
    public function getNickname(): ?string;

    /**
     * Get the id of the team the player belongs to.
     *
     * @return UuidInterface
     */
    public function getTeamId(): UuidInterface;
}
