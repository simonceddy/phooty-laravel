<?php
namespace App\Phooty\Concerns;

use App\Phooty\Contracts\Player;

trait IsPlayerAction
{
    public function __construct(
        protected Player $player,
        protected ?Player $target = null
    )
    {

    }
    public function getPlayer(): Player
    {
        return $this->player;
    }

    public function getTarget(): ?Player
    {
        return $this->target ?? null;
    }

    public function hasTarget(): bool
    {
        return isset($this->target);
    }
}
