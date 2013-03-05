<?php
/*
 * This file is part of the Badcow Lorem Ipsum Generator.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Badcow\LoremIpsum;

class Statistics
{
    /**
     * Returns random number with normal distribution,
     * about some $mean with a standard deviation, $stDev.
     *
     * @param float $mean
     * @param float $stDev
     * @return float
     */
    public static function ndRandom($mean = 0.0, $stDev = 1.0)
    {
        $x = self::random($mean, $stDev);
        $y = self::random($mean, $stDev);

        return sqrt(-2 * log($x)) * cos(2 * pi() * $y);
    }

    /**
     * Get a normalized random number about some $mean
     * with a some standard deviation, $stDev.
     *
     * @param float $mean
     * @param float $stDev
     * @return float
     */
    public static function gauss_ms($mean = 0.0, $stDev = 1.0)
    {
        return self::ndRandom() * $stDev + $mean;
    }

    /**
     * Return a random float on [0,1]
     *
     * @return float
     */
    public static function random()
    {
        return (float) (rand()/getrandmax());
    }
}