<?php
namespace App\Phooty\Simulation;

class EventLoop
{
    private bool $running = false;

    public function isRunning(): bool
    {
        return $this->running;
    }
}
