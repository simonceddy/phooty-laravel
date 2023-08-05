<?php
namespace App\Phooty\Contracts;

/**
 * The Grid is where objects with coordinates are 'placed'. It is analogous to the playing
 * surface of a footy ground.
 */
interface Grid
{
    /**
     * Get the grid length.
     *
     * The length is the distance from one set of goalposts to the other, e.g. the longest dimension
     * of the grid.
     *
     * @return int
     */
    public function getLength(): int;

    /**
     * Get the grid width.
     *
     * The width is the distance from one side of the grid to the other from a broadcast
     * perspective, e.g. the shortest dimension of the grid.
     *
     * @return int
     */
    public function getWidth(): int;
}
