<?php
namespace App\Phooty\Contracts;

/**
 * A ground object is a named wrapper around a Grid that may be linked to a team, acting as a 'home
 * ground'.
 */
interface Ground
{
    /**
     * Return the underlying Grid object.
     *
     * @return Grid
     */
    public function getGrid(): Grid;

    /**
     * Gets the Team associated with the ground, or null if none is set.
     *
     * @return Team|null
     */
    public function getTeam(): ?Team;

    /**
     * Get the name of the ground.
     *
     * This should be the full ground name, e.g. 'Melbourne Cricket Ground'
     *
     * @return string
     */
    public function getName(): string;
}
