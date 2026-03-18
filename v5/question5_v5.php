<?php

function getDiagonalDifference(array $matrix): int
{
    $countMatrix = count($matrix);
    $lastColumnIndex = ($countMatrix - 1);

    $primaryDiagonalSum = 0;
    $secondaryDiagonalSum = 0;

    for ($rowIndex = 0; $rowIndex < $countMatrix; $rowIndex++) {
        $row = $matrix[$rowIndex];
        $primaryDiagonalSum += $row[$rowIndex];
        $secondaryDiagonalSum += $row[$lastColumnIndex - $rowIndex];
    }

    $diagonalDifference = abs($primaryDiagonalSum - $secondaryDiagonalSum);

    return $diagonalDifference;
}

$matrix = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12],
];

$diagonalDifference = getDiagonalDifference($matrix);

echo $diagonalDifference;
