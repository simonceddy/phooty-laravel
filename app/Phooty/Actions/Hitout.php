<?php
namespace App\Phooty\Actions;

use App\Phooty\Concerns\IsPlayerAction;
use App\Phooty\Contracts\PlayerAction;

class Hitout extends BaseAction implements PlayerAction
{
    use IsPlayerAction;

    protected $duration = 1000;

    protected function process()
    {

    }
}
