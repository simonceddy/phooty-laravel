<?php
namespace App\Phooty\Concerns;

trait IsPlayer
{
    protected string $surname;

    protected string $firstName;

    protected ?string $nickname;

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
