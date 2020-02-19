<?php
declare(strict_types=1);
namespace Jitesoft\Contracts;

/**
 * Interface HashInterface
 *
 * Exposes method to hash string type values with a given algorithm.
 *
 * @package Jitesoft\Contracts
 * @since 1.0.0
 */
interface HashInterface {
    /**
     * Hash a value with the given algorithm.
     *
     * @param string $algorithm Algorithm to use.
     * @param string $value     Value to hash.
     * @return string           Hashed value.
     * @since 1.0.0
     */
    public function hash(string $algorithm, string $value) : string;
}
