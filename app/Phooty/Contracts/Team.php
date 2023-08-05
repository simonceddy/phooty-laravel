<?php
namespace App\Phooty\Contracts;

/**
 * A Team object represents a footy team.
 */
interface Team extends Identifiable
{
    public function getName(): string;

    public function getTown(): string;

    public function getPlayers(): PlayerRepository;
}
