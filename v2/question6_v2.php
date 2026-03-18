<?php

function plusMinus($numberList)
{
    $numberListSize = count($numberList);
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

    $positiveNumberRatio = ($countPositiveNumber / $numberListSize);
    $negativeNumberRatio = ($countNegativeNumber / $numberListSize);
    $frRatio = ($countZeroNumber / $numberListSize);

    echo number_format($positiveNumberRatio, 6, '.',''), PHP_EOL;
    echo number_format($negativeNumberRatio, 6, '.', ''), PHP_EOL;
    echo number_format($zeroNumberRatio, 6, '.', ''), PHP_EOL;
}

$numberList = [-4, 3, -9, 0, 4, 1];

plusMinus($numberList);
