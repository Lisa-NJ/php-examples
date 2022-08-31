<?php

// declare - ticks
function onTick() {
    echo 'Tick<br />';
}

register_tick_function('onTick');

declare(ticks=3);

$i = 0;
$length = 10;

while ($i < $length) {
    echo $i++ . '<br />';
}

// declare - encoding