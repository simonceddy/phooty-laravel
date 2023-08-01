<?php
namespace App\Phooty\Contracts;

interface Player
{
    public function getFirstName(): string;

    public function getSurname(): string;

    public function getNickname(): string;
}
