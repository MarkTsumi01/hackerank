<?php

// Big O Notation = O(n)

function displayRatios(float $positiveRatio, float $negativeRatio, float $zeroRatio): void
{
    echo sprintf('%.6f', $positiveRatio) . PHP_EOL;
    echo sprintf('%.6f', $negativeRatio) . PHP_EOL;
    echo sprintf('%.6f', $zeroRatio) . PHP_EOL;
}

function displayRatio(array $numberList): void
{
    $numberListLength = count($numberList);
    $countPositiveNumber = 0;
    $countNegativeNumber = 0;
    $countZeroNumber = 0;

    foreach ($numberList as $num) {
        if ($num > 0) {
            $countPositiveNumber++;
        } elseif ($num < 0) {
            $countNegativeNumber++;
        } else {
            $countZeroNumber++;
        }
    }

    $positiveNumberRatio = ($countPositiveNumber / $numberListLength);
    $negativeNumberRatio = ($countNegativeNumber / $numberListLength);
    $zeroNumberRatio = ($countZeroNumber / $numberListLength);

    displayRatios(
        $positiveNumberRatio, 
        $negativeNumberRatio, 
        $zeroNumberRatio
    );
}

$numberList = [-4, 3, -9, 0, 4, 1];

displayRatio($numberList);
