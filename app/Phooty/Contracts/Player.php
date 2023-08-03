<?php
namespace App\Phooty\Contracts;

interface Player extends Identifiable
{
    public function getFirstName(): string;

    public function getSurname(): string;

    public function getNickname(): string;
}
