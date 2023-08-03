<?php
namespace App\Phooty\Contracts;

interface Team extends Identifiable
{
    public function getName(): string;

    public function getTown(): string;
}
