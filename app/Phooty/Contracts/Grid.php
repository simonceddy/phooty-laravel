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

    /**
     * Return the coords for the given player. Return null if player is not found.
     *
     * Coords must be an array containing two numbers corresponding to x and y coordinates.
     *
     * @param Player $player
     *
     * @return ?array
     */
    public function getPlayerCoords(Player $player): ?array;

    /**
     * Set the coordinates for a player
     *
     * @param Player $player
     * @param int|float $x
     * @param int|float $y
     *
     * @return void
     */
    public function setPlayerCoords(Player $player, mixed $x, mixed $y): void;

    /**
     * Remove the given player's coordinates from the grid.
     *
     * @param Player $player
     *
     * @return void
     */
    public function removePlayer(Player $player): void;

    /**
     * Return the current coordinates of the footy
     *
     * @return array
     */
    public function getFootyCoords(): array;

    /**
     * Set the current coordinates of the footy
     *
     * @param int|float $x
     * @param int|float $y
     *
     * @return void
     */
    public function setFootyCoords(mixed $x, mixed $y): void;
}
