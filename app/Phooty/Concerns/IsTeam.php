<?php
namespace App\Phooty\Concerns;

trait IsTeam
{
    protected string $name;

    protected string $town;

    public function getName(): string
    {
        return $this->name;
    }

    public function getTown(): string
    {
        return $this->town;
    }
}
