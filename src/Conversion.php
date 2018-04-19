<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 19/04/18
 * Time: 09:42
 */

namespace Wcs;


class Conversion
{
    /**
     * Convert binary to decimal
     * @param string $binary
     * @return int
     */
    public function convert(string $binary): int
    {
        $numbers = str_split($binary);
        $numbers = array_reverse($numbers);
        $result = 0;
        foreach ($numbers as $key => $number) {
            $result += $number * pow(2, $key);
        }
        return $result;

    }
}