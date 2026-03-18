<?php

// Big O Notation = O(1)

function getSumNumber(int $firstNumber, int $secondNumber): int
{
    $result = ($firstNumber + $secondNumber);

    return $result;
}

$firstNumber = 2; 
$secondNumber = 3;
$totalSum = getSumNumber($firstNumber, $secondNumber);

echo $totalSum;
