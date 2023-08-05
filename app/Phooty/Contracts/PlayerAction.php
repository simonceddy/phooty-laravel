<?php
namespace App\Phooty\Contracts;

/**
 * A Player action represents an Action always performed by a player.
 */
interface PlayerAction extends Action
{
    /**
     * Get the Player performing the Action.
     *
     * @return Player
     */
    public function getPlayer(): Player;

    /**
     * Get the target Player of the action, or null if no target is set.
     *
     * Actions that require a target should set target either during construction or during the
     * Actions run() method.
     *
     * @return Player|null
     */
    public function getTarget(): ?Player;
}
