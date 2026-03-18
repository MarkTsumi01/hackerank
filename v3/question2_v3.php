<?php

// Big O Notation = O(n)

function getSumNumber(array $numberList): int
{
    $result = 0;

    foreach ($numberList as $number) {
        $result += $number;
    }

    return $result;
}

$numberList = [1, 2, 3, 4, 10, 11];
$totalSum = getSumNumber($numberList);

echo $totalSum;
