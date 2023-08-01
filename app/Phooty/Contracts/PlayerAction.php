<?php
namespace App\Phooty\Contracts;

interface PlayerAction extends Action
{
    public function getPlayer(): Player;

    public function getTarget(): ?Player;
}
