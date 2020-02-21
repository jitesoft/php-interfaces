<?php
declare(strict_types=1);
namespace Jitesoft\Contracts;

use Psr\Container\ContainerInterface as PsrContainerInterface;

/**
 * Interface ContainerInterface
 *
 * This is a minor extension to the PSR container interface, adding a `set` method.
 *
 * @package Jitesoft\Contracts
 */
interface ContainerInterface extends PsrContainerInterface {
    /**
     * Add or replace a value in the container.
     *
     * @param string $abstract  Abstract key to bind to.
     * @param mixed  $concrete  Concrete value to generate.
     * @param bool   $singleton If only a single instance should be created or a new one on each get-call.
     */
    public function set(string $abstract, $concrete, bool $singleton = false): void;
}
