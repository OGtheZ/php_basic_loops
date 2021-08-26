<?php

$x = (int) readline("Enter a number to multiply: ");
$power = (int) readline("How many times would you like it multiplied by itself? Enter: ");
$y = $x;

for ($i = 1; $i <= $power; $i++) {
    $y = $y * $x;
}
echo $y;