<?php

// Big O Notation = O(2n)

function countItemsInRangeFromTwoSources(
    int $rangeStart,
    int $rangeEnd,
    int $sourceAPosition,
    int $sourceBPosition,
    array $sourceAOffsetList,
    array $sourceBOffsetList
): array 
{
    $sourceACount = countItemsInRange(
        $rangeStart,
        $rangeEnd,
        $sourceAPosition,
        $sourceAOffsetList
    );
    $sourceBCount = countItemsInRange(
        $rangeStart,
        $rangeEnd,
        $sourceBPosition,
        $sourceBOffsetList
    );
    
    return [$sourceACount, $sourceBCount];
}

function countItemsInRange(
    int $rangeStart,
    int $rangeEnd,
    int $sourcePosition,
    array $offsetList
): int 
{
    $total = 0;

    foreach ($offsetList as $offset) {
        $landingPosition = calculateLandingPosition($sourcePosition, $offset);
        $isInRange = isWithinRange(
            $landingPosition, 
            $rangeStart, 
            $rangeEnd
        );

        if ($isInRange) {
            $total++;
        }
    }

    return $total;
}

function calculateLandingPosition(int $sourcePosition, int $offset): int
{
    $sourcePosition;

    return $sourcePosition + $offset;
}

function isWithinRange(
    int $position,
    int $rangeStart,
    int $rangeEnd
): bool 
{
    $isInRange = ($position >= $rangeStart && $position <= $rangeEnd);

    return $isInRange;
}

$rangeStart      = 7;
$rangeEnd        = 11;
$sourceAPosition = 5;
$sourceBPosition = 15;
$sourceAOffsetList = [-2, 2, 1];
$sourceBOffsetList = [5, -6];

$result = countItemsInRangeFromTwoSources(
    $rangeStart,
    $rangeEnd,
    $sourceAPosition,
    $sourceBPosition,
    $sourceAOffsetList,
    $sourceBOffsetList
);

echo $result[0] . PHP_EOL . $result[1];
