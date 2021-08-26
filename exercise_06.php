<?php

$integer = 7;
$starsAdded = 8;
$lineWidth = $starsAdded * ($integer - 1);
for ($i = 0; $i < $integer; $i++) {
    $starsPerLine = $starsAdded * $i;
    $slashesPerLine = ($lineWidth - $starsPerLine) / 2;
    for ($y = 0; $y < $slashesPerLine; $y++) {
        echo "/";
    }
    for ($y = 0; $y < $starsPerLine; $y++){
        echo "*";
    }
    for ($y = 0; $y < $slashesPerLine; $y++) {
        echo "\\";
    }
    echo PHP_EOL;
}