<?php
namespace App\Phooty\Data;

use App\Phooty\Exceptions\InvalidPositionException;

class Position implements \JsonSerializable
{
    public const FULL_FORWARD = 'FULL_FORWARD';
    public const RIGHT_FORWARD_POCKET = 'RIGHT_FORWARD_POCKET';
    public const LEFT_FORWARD_POCKET = 'LEFT_FORWARD_POCKET';
    public const CENTER_HALF_FORWARD = 'CENTER_HALF_FORWARD';
    public const RIGHT_HALF_FORWARD = 'RIGHT_HALF_FORWARD';
    public const LEFT_HALF_FORWARD = 'LEFT_HALF_FORWARD';
    public const LEFT_WING = 'LEFT_WING';
    public const RIGHT_WING = 'RIGHT_WING';
    public const RIGHT_HALF_BACK = 'RIGHT_HALF_BACK';
    public const LEFT_HALF_BACK = 'LEFT_HALF_BACK';
    public const CENTER_HALF_BACK = 'CENTER_HALF_BACK';
    public const FULL_BACK = 'FULL_BACK';
    public const LEFT_BACK_POCKET = 'LEFT_BACK_POCKET';
    public const RIGHT_BACK_POCKET = 'RIGHT_BACK_POCKET';
    public const ROVER = 'ROVER';
    public const RUCK = 'RUCK';
    public const RUCK_ROVER = 'RUCK_ROVER';
    public const CENTER = 'CENTER';

    public const DEBUG = 'DEBUG';

    public static $positions = [
        self::LEFT_BACK_POCKET => self::LEFT_BACK_POCKET,
        self::FULL_BACK => self::FULL_BACK,
        self::RIGHT_BACK_POCKET => self::RIGHT_BACK_POCKET,
        self::LEFT_HALF_BACK => self::LEFT_HALF_BACK,
        self::CENTER_HALF_BACK => self::CENTER_HALF_BACK,
        self::RIGHT_HALF_BACK => self::RIGHT_HALF_BACK,
        self::LEFT_WING => self::LEFT_WING,
        self::CENTER => self::CENTER,
        self::RIGHT_WING => self::RIGHT_WING,
        self::LEFT_HALF_FORWARD => self::LEFT_HALF_FORWARD,
        self::CENTER_HALF_FORWARD => self::CENTER_HALF_FORWARD,
        self::RIGHT_HALF_FORWARD => self::RIGHT_HALF_FORWARD,
        self::LEFT_FORWARD_POCKET => self::LEFT_FORWARD_POCKET,
        self::FULL_FORWARD => self::FULL_FORWARD,
        self::RIGHT_FORWARD_POCKET => self::RIGHT_FORWARD_POCKET,
        self::RUCK => self::RUCK,
        self::ROVER => self::ROVER,
        self::RUCK_ROVER => self::RUCK_ROVER,
    ];

    private string $position;

    public function __construct(
        string $position
    ) {
        if ($this->isValidPosition($position)) {
            $this->position = $position;
        } else {
            throw new InvalidPositionException('Invalid position: ' . $position);
        }
    }

    private function isValidPosition(string $position)
    {
        return $position === static::DEBUG || isset(static::$positions[$position]);
    }

    public function toString()
    {
        return $this->position;
    }

    public function __toString()
    {
        return $this->toString();
    }

    public function jsonSerialize(): mixed
    {
        return $this->toString();
    }
}
