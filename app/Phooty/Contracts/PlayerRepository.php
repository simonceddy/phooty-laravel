<?php
namespace App\Phooty\Contracts;

interface PlayerRepository
{
    public function hasPlayer($id): bool;

    public function getPlayer($id): ?Player;

    public function getTeamId();
}
