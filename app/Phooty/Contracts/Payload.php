<?php
namespace App\Phooty\Contracts;

interface Payload
{
    public function getTeam($id): ?Team;
}
