<?php
declare(strict_types=1);
namespace Jitesoft\Contracts;

/**
 * Interface ComparableInterface
 *
 * Simple comparable interface, mainly used in sorting and similar to decide on which object comes before or after another.
 *
 * @package Jitesoft\Contracts
 */
interface ComparableInterface {
    /**
     * Compares `$object` with the instance.
     * Returns a integer value (-1 to 1) where 0 is equal, less than 0 is preceding and greater than 0 follows.
     *
     * @param mixed $object Object to compare to.
     * @return int 0 if equal, less than 0 if preceding, more than 0 if following.
     */
    public function compareTo($object): int;
}
