<?php
declare(strict_types=1);
namespace Jitesoft\Contracts;

/**
 * Interface EqualInterface
 *
 * Equality check
 *
 * @package Jitesoft\Contracts
 */
interface EqualInterface {
    /**
     * Compare the `$object` with the instance to see if they are equal or not.
     *
     * @param mixed $object Object to compare to the instance.
     * @param bool  $strict If the quality check should be strict or not.
     * @return bool True on equal, false on none-equal.
     */
    public function equalTo($object, bool $strict = true): bool;
}
