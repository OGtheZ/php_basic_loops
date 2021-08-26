<?php

$desiredSum = readline("Desired sum: ");
do {
    $dice1 = rand(1,6);
    $dice2 = rand(1,6);
    echo "$dice1 and $dice2 = " . ($dice1 + $dice2) . PHP_EOL;
} while ($desiredSum != ($dice1 + $dice2));