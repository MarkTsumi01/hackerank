<?php

function sumBignumber(array $numberList): int
{
    $totalSum = 0;
    
    foreach ($numberList as $number) {
        $totalSum += $number;
    }

    return $totalSum;
}

$numberList = [
    1000000001,
    1000000002,
    1000000003,
    1000000004,
    1000000005,
];

echo sumBignumber($numberList);
