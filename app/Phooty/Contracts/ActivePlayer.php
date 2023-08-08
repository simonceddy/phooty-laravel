<?php
namespace App\Phooty\Contracts;

use App\Phooty\Data\Position;

interface ActivePlayer extends Player
{
    public function getPosition(): Position;
}
