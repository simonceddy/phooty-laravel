<?php
namespace App\Phooty\Entities;

use App\Phooty\Concerns\{HasID};
use App\Phooty\Contracts\Player;
use App\Phooty\Data\PlayerData;
use Ramsey\Uuid\Uuid;

class PlayerContainer implements Player
{
    use HasID;

    public function __construct(
        private PlayerData $data,
    )
    {
        $this->id = Uuid::uuid4();
    }

    public function getFirstName(): string
    {
        return $this->data->getFirstName();
    }

    public function getSurname(): string
    {
        return $this->data->getSurname();
    }

    public function getNickname(): string
    {
        return $this->data->getNickname();
    }
}
