<?php

$min = (int) readline("Min?");
$max = (int) readline("Max?");
$side = $max - $min +1;

for ($row = 0; $row < $side; $row++) {
    for ($col = 0; $col < $side; $col++) {
        echo ($min + (($row + $col) % $side));
    } echo PHP_EOL;
}