<?php
namespace App\Phooty\Contracts;

/**
 * A Player object represents a footy player
 */
interface Player extends Identifiable
{
    public function getFirstName(): string;

    public function getSurname(): string;

    public function getNickname(): string;
}
