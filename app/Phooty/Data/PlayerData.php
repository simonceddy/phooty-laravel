<?php
namespace App\Phooty\Data;

class PlayerData
{
    public function __construct(
        private string $firstName,
        private string $surname,
        private ?string $nickname = null
    ) {}

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getNickname(): ?string
    {
        return isset($this->nickname) ? $this->nickname : null;
    }
}
