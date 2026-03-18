<?php 

function getDiagonalDifference(array $matrix): int
{
    if (empty($matrix)) {
        return 0;
    }

    $matrixSize = count($matrix);
    $lastIndex = $matrixSize - 1;

    $primarySum = 0;
    $secondarySum = 0;
    
    for ($index = 0; $index < $matrixSize; $index++) {
        $currentRow = $matrix[$index];
        $primarySum += $currentRow[$index];
        $secondarySum += $currentRow[$lastIndex - $index];
    }

    $result = abs($primarySum - $secondarySum);
    
    return $result;
}

$matrix = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12],
];

$diagonalDifferenceResult = getDiagonalDifference($matrix);

echo $diagonalDifferenceResult;
