<?php

declare(strict_types=1);

function sum1(float $x, float $y) {
    return $x + $y;
}

$s = sum1(2, 4);

echo $s . '<br />';

$z = (int)'7';

var_dump($z);