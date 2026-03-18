<?php

// Big O Notation = O(n)

function displayRatio(array $ratioList): void
{
    foreach ($ratioList as $ratio) {
        echo sprintf('%.6f', $ratio) . PHP_EOL;
    }
}

function getRatio(array $numberList): array
{
    $total = count($numberList);
    $positiveCount = 0;
    $negativeCount = 0;
    $zeroCount = 0;

    foreach ($numberList as $number) {
        if ($number > 0) {
            $positiveCount++;
        } elseif ($number < 0) {
            $negativeCount++;
        } else {
            $zeroCount++;
        }
    }

    $positiveNumberRatio = ($positiveCount / $total);
    $negativeNumberRatio = ($negativeCount / $total);
    $zeroNumberRatio = ($zeroCount / $total);

    $result = [$positiveNumberRatio, $negativeNumberRatio, $zeroNumberRatio];

    return $result;
}

$numberList = [
    -4, 
    3, 
    -9, 
    0, 
    4, 
    1
];

$ratioList = getRatio($numberList);

$resultFormat = displayRatio($ratioList);
