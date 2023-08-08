<?php
namespace App\Phooty\AI;

use App\Phooty\Contracts\Footy;

class FootyAwareness
{
    public function __construct(private Footy $footy)
    {}
}
