<?php
namespace App\Phooty\Data;

use App\Phooty\Exceptions\InvalidAttributeException;

/**
 * Player attributes determine how effective player actions are.
 *
 * They should influence RNG for decision making and action outcomes.
 */
class PlayerAttributes implements \JsonSerializable, \ArrayAccess
{
    public static array $validAttributes = [
        // Determines effectiveness and range of kicks
        'kicking' => 'kicking',

        // Determines success rate in marking contests and chance to fumble marks
        'marking' => 'marking',

        // Determines how quickly a player can move around the grid
        'speed' => 'speed',

        // Determines how much a player will defensively effect a contest
        'defense' => 'defense',

        // Determines effectiveness in ruck contests
        'ruck' => 'ruck',

        //Determines success of ground ball gets, running bounces, handballs
        'handling' => 'handling',

        // Determines effectiveness of scoring shots
        'scoring' => 'scoring',

        // Determines effectiveness of spoils, e.g. how likely an opponent is to gain possession
        'spoiling' => 'spoiling'
    ];

    private array $attr = [
        'kicking' => 6,
        'marking' => 5,
        'speed' => 5,
        'defense' => 5,
        'ruck' => 2,
        'handling' => 5,
    ];

    /**
     * Create a new PlayerAttributes object.
     *
     * @param array $attributes The attribute values
     * @param array|null $userAttributes User defined attributes (TODO)
     */
    public function __construct(array $attributes = [], private ?array $userAttributes = [])
    {
        foreach (static::$validAttributes as $key) {
            if (isset($attributes[$key]) && is_numeric($attributes[$key])) {
                $this->attr[$key] = $attributes[$key];
            }
        }
        // TODO user attributes
    }

    public function attribute(string $name)
    {
        return isset($this->attr[$name]) ? $this->attr[$name] : null;
    }

    public function getAttributeNames()
    {
        return array_keys($this->attr);
    }

    public function getAttributes()
    {
        return $this->attr;
    }

    public function getUserAttributes()
    {
        return $this->userAttributes ?? null;
    }

    public function toArray(): array
    {
        return [...$this->getAttributes(), 'userAttributes' => $this->userAttributes];
    }

    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->attr[$offset])
            || (isset($this->userAttributes) && isset($this->userAttributes[$offset]));
    }

    public function offsetGet(mixed $offset): mixed
    {
        if (!$this->offsetExists($offset)) {
            throw new InvalidAttributeException(
                'Invalid attribute: ' . $offset
            );
        }

        return $this->attr[$offset] ?? $this->userAttributes[$offset];
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        // does nothing
    }

    public function offsetUnset(mixed $offset): void
    {
        // does nothing
    }
}
