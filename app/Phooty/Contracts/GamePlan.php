<?php
namespace App\Phooty\Contracts;

// TODO

/**
 * A GamePlan object should contain information about how player entities should behave given the
 * current state of the simulation.
 *
 * A player object should be able to consult, but not be limited by, the GamePlan to help determine
 * the player's next action.
 *
 * Programatically this aims to shift most responsibility of determining movement and directions
 * away from individual Actions.
 */
interface GamePlan
{
}
