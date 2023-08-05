<?php
namespace App\Phooty\Contracts;

/**
 * A footy object represents the football in a match.
 *
 * The two purposes of this object are to track coordinates of the footy and to determine which, if
 * any, player is currently in possession.
 */
interface Footy extends Identifiable
{
    /**
     * Get the player currently in possession. Must return null if no player is in possession.
     *
     * @return Player|null
     */
    public function getPossessor(): ?Player;

    /**
     * Set the player currently in possession.
     *
     * If null is passed instead of a Player object, it
     * should act the same as the clearPossessor method and set the current possessor to null.
     *
     * @param Player|null $player
     *
     * @return void
     */
    public function setPossessor(?Player $player = null);

    /**
     * Check if the footy is currently in possession of a player
     *
     * @return bool
     */
    public function hasPossessor(): bool;

    /**
     * Clear the player currently in possession.
     *
     * @return void
     */
    public function clearPossessor(): void;
}
