<?php
namespace App\Phooty\Simulation;

use App\Phooty\Contracts\Grid;
use App\Phooty\Contracts\Payload as PayloadContract;
use App\Phooty\Contracts\Team;

class Payload implements PayloadContract
{
    public function hasTeam($id): bool
    {

    }

    public function getTeam($id): ?Team
    {

    }

    public function getGrid(): Grid
    {

    }
}
