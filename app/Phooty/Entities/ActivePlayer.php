<?php
namespace App\Phooty\Entities;

use App\Phooty\Contracts\{ActivePlayer as ActivePlayerContract, Player};
use App\Phooty\Data\Position;
use App\Phooty\Exceptions\PhootyException;
use Ramsey\Uuid\UuidInterface;

/**
 * The ActivePlayer class is a match aware wrapper around a player entity. It can be used as a Player
 * entity.
 *
 * @property-read Player $player
 * @property-read Position $position
 * @property-read UuidInterface $id
 * @property-read UuidInterface $teamId
 *
 * @method string getSurname()
 * @method string getFirstName()
 * @method string|null getNickname()
 * @method UuidInterface getId()
 * @method UuidInterface getTeamId()
 */
class ActivePlayer implements ActivePlayerContract
{
    public function __construct(
        private Player $player,
        private Position $position
    ) {}

    public function getPlayer()
    {
        return $this->player;
    }

    public function getPosition(): Position
    {
        return $this->position;
    }

    public function __call($name, $args)
    {
        if (method_exists($this->player, $name)) {
            return call_user_func_array([$this->player, $name], $args);
        }
        if (method_exists($this->position, $name)) {
            return call_user_func_array([$this->position, $name], $args);
        }

        throw new \BadMethodCallException('Undefined method: ' . $name);
    }

    public function __get($name)
    {
        switch ($name) {
            case 'player':
                return $this->player;
            case 'position':
                return $this->position;
            case 'id':
                return $this->player->getId();
            case 'teamId':
                return $this->player->getTeamId();
        }

        throw new PhootyException('Undefined property: ' . $name);
    }
}
