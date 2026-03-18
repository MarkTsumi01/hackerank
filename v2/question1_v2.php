<?php

function sumTwoNumber(int $firstNumber, int $secondNumber): int
{
    $result = ($firstNumber + $secondNumber);

    return $result;
}

$firstNumber = 2; 
$secondNumber = 3;
$totalSum = sumTwoNumber($firstNumber, $secondNumber);

echo $totalSum;
