<?php

$gameIsLive = true;
$points = 0;

echo "Welcome to piglet!" . PHP_EOL;
while($gameIsLive) {
    $dice = rand(1,6);

    if ($dice === 1) {
        echo "You rolled $dice! You got $points points!" . PHP_EOL;
        exit;
    }
    switch ($dice) {
        case 2:
            $points = $points + 2;
            break;
        case 3:
            $points = $points + 3;
            break;
        case 4:
            $points = $points + 4;
            break;
        case 5:
            $points = $points + 5;
            break;
        case 6:
            $points = $points + 6;
            break;
    }
    echo "You rolled a $dice!" . PHP_EOL;
    $retry = readline("Roll again?");
    if ($retry === 'n') {
        $gameIsLive = false;
        echo "You got $points points!" . PHP_EOL;
    }
}