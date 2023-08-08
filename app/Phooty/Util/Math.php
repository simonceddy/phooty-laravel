<?php
namespace App\Phooty\Util;

/**
 * Helper for maths functions required by the Phooty simulation
 */
final class Math
{
    public static function pythag($a, $b)
    {
        return sqrt(($a * $a) + ($b * $b));
    }
}
