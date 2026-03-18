<?php

function displayStaircase(int $number): void
{
    for ($index = 1; $index < $number; $index++) {
        $space = ($number - $index);
        $spaces = str_repeat(' ', $space);
        $symbol = str_repeat('#', $index);

        echo $spaces . $symbol . PHP_EOL;
    }
}

$number = 6;

displayStaircase($number);
