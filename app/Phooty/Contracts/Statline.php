<?php
namespace App\Phooty\Contracts;

/**
 * A Statline tracks the accumulated stats for an individual Player during a simulation.
 */
interface Statline
{
    /**
     * Returns the value for the given stat.
     *
     * Must return null if no stats match the given $name.
     *
     * @param string $name
     *
     * @return int|float|null
     */
    public function getStat(string $name): mixed;

    /**
     * Add stats to the statline.
     *
     * @param string $name Stat name e.g. 'kick'
     * @param int|float $increment Amount of stats to add. Should be 1 in most cases. Defaults to 1.
     *
     * @return self Returns either updated $this or a new updated statline, depending on
     * implementation.
     */
    public function addStat(string $name, mixed $increment = 1): self;
}
