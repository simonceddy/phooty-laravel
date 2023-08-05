<?php
namespace App\Phooty\Entities;

use App\Phooty\Concerns\HandlesIDs;
use App\Phooty\Contracts\Player;
use App\Phooty\Contracts\PlayerRepository;
use Ramsey\Uuid\UuidInterface;
use Traversable;

class PlayingList implements PlayerRepository
{
    use HandlesIDs;

    /**
     * Create a new PlayingList
     *
     * @param Player[] $players
     * @param UuidInterface $teamId
     */
    public function __construct(
        private array $players,
        private UuidInterface $teamId,
    ) {}

    public function hasPlayer($id): bool
    {
        return isset($this->players[$this->handleID($id)]);
    }

    public function getTeamId(): UuidInterface
    {
        return $this->teamId;
    }

    public function getPlayer($id): ?Player
    {
        return $this->players[$this->handleID($id)] ?? null;
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->players);
    }

    public function toArray()
    {
        return [
            'teamId' => $this->teamId->toString(),
            'players' => $this->players,
        ];
    }
}
