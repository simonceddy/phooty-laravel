<?php
namespace App\Phooty\Entities;

use App\Phooty\Concerns\{HasID, IsTeam};
use App\Phooty\Contracts\Team as TeamContract;

class Team implements TeamContract
{
    use HasID, IsTeam;

    public function __construct(
        string $town,
        string $name,
    ) {
        $this->town = $town;
        $this->name = $name;
    }
}
