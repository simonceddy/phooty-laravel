<?php
namespace App\Phooty\Contracts;

/**
 * A Team object represents a footy team.
 */
interface Team extends Identifiable
{
    /**
     * Get the team name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get the team town
     *
     * @return string
     */
    public function getTown(): string;

    /**
     * Get the team playerrepository
     *
     * @return PlayerRepository
     */
    public function getPlayers(): PlayerRepository;
}
