<?php
namespace App\Phooty\Entities;

use App\Phooty\Concerns\HasID;
use App\Phooty\Contracts\Footy;
use Ramsey\Uuid\Uuid;

class Sherrin implements Footy
{
    use HasID;

    public function __construct()
    {
        $this->id = Uuid::uuid4();
    }
}
