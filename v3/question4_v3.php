<?php

// Big O Notation = O(n)

function getSumBigNumber(array $numberList): int
{
    $result = 0;

    foreach ($numberList as $number) {
        $result += $number;
    }

    return $result;
}

$numberList = [
    1000000001,
    1000000002,
    1000000003,
    1000000004,
    1000000005,
];

echo getSumBigNumber($numberList);
