<?php
namespace App\Phooty\Data;

class TeamData
{
    public function __construct(
        private string $town,
        private string $name
    ) {}

    public function getTown()
    {
        return $this->town;
    }

    public function getName()
    {
        return $this->name;
    }
}
