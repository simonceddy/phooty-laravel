<?php
namespace App\Phooty\Contracts;

use Ramsey\Uuid\UuidInterface;

/**
 * An Identifiable object has a unique Uuid
 */
interface Identifiable
{
    public function getId(): UuidInterface;
}
