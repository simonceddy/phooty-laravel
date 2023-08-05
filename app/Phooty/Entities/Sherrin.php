<?php
namespace App\Phooty\Entities;

use App\Phooty\Concerns\HasID;
use App\Phooty\Contracts\Footy;
use App\Phooty\Contracts\Player;
use Ramsey\Uuid\Uuid;

class Sherrin implements Footy
{
    use HasID;

    private ?Player $possessor = null;

    public function __construct()
    {
        $this->id = Uuid::uuid4();
    }

    public function setPossessor(?Player $player = null)
    {
        $this->possessor = $player;
    }

    public function getPossessor(): ?Player
    {
        return $this->possessor ?? null;
    }

    public function hasPossessor(): bool
    {
        return isset($this->possessor);
    }

    public function clearPossessor(): void
    {
        $this->possessor = null;
    }
}
