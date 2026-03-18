<?php

function sumMatrix(array $matrixList): int
{
    $matrixSize = count($matrixList);
    $leftToRightSum = 0;
    $rightToLeftSum = 0;

    for ($i = 0; $i < $matrixSize; $i++) {
        $leftToRightSum += $matrixList[$i][$i];
        $rightToLeftSum += $matrixList[$i][$matrixSize - 1 - $i];
    }

    $positiveNumber = abs($leftToRightSum - $rightToLeftSum);

    return $positiveNumber;
}

$matrixList = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12],
];

$result = sumMatrix($matrixList);

echo $result;
