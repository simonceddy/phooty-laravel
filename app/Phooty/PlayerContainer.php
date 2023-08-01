<?php
namespace App\Phooty;

use App\Phooty\Contracts\Player;

class PlayerContainer implements Player
{
    public function getFirstName(): string
    {
        return '';
    }

    public function getSurname(): string
    {
        return '';
    }

    public function getNickname(): string
    {
        return '';
    }
}
