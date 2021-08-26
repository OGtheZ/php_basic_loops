<?php

$firstWord = readline("Enter the first word: ");
$secondWord = readline("Enter the second word: ");
$dotLength = 30 - (strlen($firstWord) + strlen($secondWord));

echo $firstWord;
for ($i = 1; $i <= $dotLength; $i++) {
    echo ".";
}
echo $secondWord . PHP_EOL;