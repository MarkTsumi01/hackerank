<?php

function getDiagonalDifference(array $matrix): int
{
    $matrixSize = count($matrix);
    $primaryDiagonalSum = 0;
    $secondaryDiagonalSum = 0;

    for ($index = 0; $index < $matrixSize; $index++) {
        $priCol = $matrix[$index];
        $secondaryDiagonalColIndex = ($matrixSize - 1) - $index;
        $primaryDiagonalSum += $priCol[$index];
        $secondaryDiagonalSum += $priCol[$secondaryDiagonalColIndex];
    }

    $diagonalDifference = abs($primaryDiagonalSum - $secondaryDiagonalSum);

    return $diagonalDifference;
}

$matrix = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12],
];

$diagonalDifferenceResult = getDiagonalDifference($matrix);

echo $diagonalDifferenceResult;
