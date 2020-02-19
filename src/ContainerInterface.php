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
     * @param string $key   Key which the value can be accessed by.
     * @param mixed  $value Value to add.
     */
    public function set(string $key, $value): void;
}
