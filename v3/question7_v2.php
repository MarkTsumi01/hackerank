<?php
// O(n)
function calculateSum(array $numberList): int
{
    $totalSum = 0;

    foreach ($numberList as $number) {
        $totalSum += $number;
    }

    return $totalSum;
}

// O(n)
function findMin(array $numberList): int
{
    $min = $numberList[0];

    foreach ($numberList as $number) {
        if ($number < $min) {
            $min = $number;
        }
    }

    return $min;
}

// O(n)
function findMax(array $numberList): int
{
    $max = $numberList[0];

    foreach ($numberList as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }

    return $max;
}

// O(n^2)
function sortAscending(array $numberList): array
{
    $size = count($numberList);

    for ($outerIndex = $size - 1; $outerIndex > 0; $outerIndex--) {
        for ($innerIndex = 0; $innerIndex < $outerIndex; $innerIndex++) {
            if ($numberList[$innerIndex] > $numberList[$innerIndex + 1]) {
                $temp = $numberList[$innerIndex];
                $numberList[$innerIndex] = $numberList[$innerIndex + 1];
                $numberList[$innerIndex + 1] = $temp;
            }
        }
    }
    
    return $numberList;
}

// O(n^2)
function showMinMaxSum(array $numberList): void
{
    $sortedList = sortAscending($numberList);
    $totalSum = calculateSum($sortedList);
    $sumsWithoutEach = [];

    foreach ($sortedList as $index => $number) {
        $sumsWithoutEach[] = $totalSum - $number;
    }

    $minSum = findMin($sumsWithoutEach);
    $maxSum = findMax($sumsWithoutEach);

    echo $minSum . ' ' . $maxSum;
}

$numberList = [7, 69, 2, 221, 8974];

showMinMaxSum($numberList);
