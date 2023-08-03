<?php
namespace App\Phooty\Contracts;

interface Payload
{
    public function hasTeam($id): bool;

    public function getTeam($id): ?Team;
}
