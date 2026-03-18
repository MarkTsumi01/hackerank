<?php

function sumArray(array $numberList): int
{
    $totalSum = 0;

    foreach ($numberList as $number) {
        $totalSum += $number;
    }

    return $totalSum;
}

$numberList = [1, 2, 3, 4, 10, 11];

echo sumArray($numberList);
