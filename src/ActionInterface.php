<?php
declare(strict_types=1);
namespace Jitesoft\Contracts;

/**
 * Interface Action
 *
 * Simple action, basically a closure wrapper.
 *
 * @package Jitesoft\Contracts
 */
interface ActionInterface {
    /**
     * Invokes the action.
     *
     * @param mixed ...$args Argument list.
     * @return mixed Value depending on the specific action implementation.
     */
    public function invoke(...$args);
}
