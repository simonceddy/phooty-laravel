<?php
namespace App\Phooty\Actions;

use App\Phooty\Contracts\Action;

/**
 * @property-read int|float $duration The duration of the action in milliseconds
 */
abstract class BaseAction implements Action
{
    abstract protected function process();

    public function run()
    {

    }

    public function getDuration()
    {
        return isset($this->duration) ? $this->duration : 1000;
    }

    public function __get($name)
    {
        if ($name === 'duration') {
            return $this->getDuration();
        }
    }
}
