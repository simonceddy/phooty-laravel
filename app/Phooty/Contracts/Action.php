<?php
namespace App\Phooty\Contracts;

/**
 * An Action object represents any function that somehow advances the simulation.
 *
 * This should be anything from a player moving to a goal scored to a centre bounce ruck contest.
 */
interface Action
{
    /**
     * Process the action.
     *
     * Must return one of:
     * - a resolvable class name for a class implementing Action, e.g. MyFootyAction::class
     * - an array containing aforementioned class name at index 0, with required constructor
     * arguments as additional indices, e.g. [MyFootyAction::Class, $playerArg, $targetArg, $etc]
     * - an object implementing Action e.g. new MyFootyAction($args)
     * - null if no next Action
     *
     * @param Payload $payload
     *
     * @return string|array|Action|null
     */
    public function run(Payload $payload): mixed;
}
