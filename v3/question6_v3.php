<?php

// Big O Notation = O(n)

function displayRatio($numberList)
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
    $zeroNumberRatio = ($countZeroNumber / $numberListSize);

    echo sprintf('%.6f',$positiveNumberRatio). '<br>';
    echo sprintf('%.6f',$negativeNumberRatio). '<br>';
    echo sprintf('%.6f',$zeroNumberRatio). '<br>';
}

$numberList = [-4, 3, -9, 0, 4, 1];

displayRatio($numberList);
