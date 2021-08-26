<?php

$number = readline("Enter a number: ");

for ($i = 1; $i <= $number; $i++)
{
    if ($i % 20 === 0 && $i % 5 === 0 && $i % 3 === 0)
    {
        echo "FizzBuzz " . PHP_EOL;
    }
    else if ($i % 20 === 0 && $i % 5 === 0)
    {
        echo "Buzz " . PHP_EOL;
    }
    else if ($i % 20 === 0 && $i % 3 === 0)
    {
        echo "Fizz " . PHP_EOL;
    }
    else if($i % 3 === 0 && $i % 5 === 0)
    {
        echo "FizzBuzz ";
    }
    else if ($i % 3 === 0)
    {
        echo "Fizz ";
    }
    else if ($i % 5 === 0)
    {
        echo "Buzz ";
    }
    else
    {
        echo $i . " ";
    }
}