<?php
namespace App\Phooty\Entities;

use App\Phooty\Concerns\{HasID, IsPlayer};
use App\Phooty\Contracts\Player as PlayerContract;
use Ramsey\Uuid\Uuid;

class Player implements PlayerContract
{
    use IsPlayer, HasID;

    public function __construct()
    {
        $this->id = Uuid::uuid4();
    }
}
