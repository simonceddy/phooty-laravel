<?php
namespace App\Phooty\Contracts;

// TODO

/**
 * The Payload object contains all mutable data used by the simulation.
 */
interface Payload
{
    /**
     * Get the simulation's Grid object.
     *
     * @return Grid
     */
    public function getGrid(): Grid;
}
