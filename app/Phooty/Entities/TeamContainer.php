<?php
namespace App\Phooty\Entities;

use App\Phooty\Concerns\{HasID};
use App\Phooty\Contracts\{PlayerRepository, Team};
use App\Phooty\Data\TeamData;
use Ramsey\Uuid\Uuid;

class TeamContainer implements Team
{
    use HasID;

    public function __construct(
        private TeamData $data,
        private PlayerRepository $players,
    ) {
        $this->id = Uuid::uuid4();
    }

    public function getName(): string
    {
        return $this->data->getName();
    }

    public function getTown(): string
    {
        return $this->data->getTown();
    }

    public function getPlayers(): PlayerRepository
    {
        return $this->players;
    }
}
