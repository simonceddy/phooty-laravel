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

    public function getTeam(): ?Team;

    public function getName(): string;
}
