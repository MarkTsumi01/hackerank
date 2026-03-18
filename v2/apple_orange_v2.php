<?php

// Big O Notation = O(2n) 

function isOnHouse(
    int $fruitPosition, 
    int $houseStartPosition, 
    int $houseEndPostion
): bool
{
    $isAfterOrAtStart = ($fruitPosition >= $houseStartPosition);
    $isBeforeOrAtEnd = ($fruitPosition <= $houseEndPostion);

    if ($isAfterOrAtStart && $isBeforeOrAtEnd) {
        return true;
    } else {
        return false;
    }
}

function findFruitPosition(int $fruitTreePostion,int $distance): int 
{
    $fruitPosition = ($fruitTreePostion + $distance);

    return $fruitPosition;
}

function countAppleAndOrange(
    int $houseStartPosition,
    int $houseEndPosition,
    int $appleTreePosition,
    int $orangeTreePosition,
    array $appleDistanceList,
    array $orangeDistanceList
): array 
{
    $applesOnHouse = 0;
    $orangesOnHouse = 0;

    foreach ($appleDistanceList as $distance) {
        $applePosition = findFruitPosition($appleTreePosition, $distance);
        $isAppleOnHouse = isOnHouse(
            $applePosition, 
            $houseStartPosition, 
            $houseEndPosition);

        if ($isAppleOnHouse) {
            $applesOnHouse++;
        }
    }

    foreach ($orangeDistanceList as $distance) {
        $orangePosition = findFruitPosition($orangeTreePosition, $distance);
        $isOrangeOnHouse = isOnHouse(
            $orangePosition,
            $houseStartPosition,
            $houseEndPosition
        );

        if ($isOrangeOnHouse) {
            $orangesOnHouse++;
        }
    }

    $result = [$applesOnHouse, $orangesOnHouse];

    return $result;
}

$houseStartPosition = 7;
$houseEndPosition = 11;
$appleTreePosition = 5;
$orangeTreePosition = 15;
$appleDistanceList = [-2, 2, 1];
$orangeDistanceList = [5, -6];

$count = countAppleAndOrange(
    $houseStartPosition,
    $houseEndPosition,
    $appleTreePosition,
    $orangeTreePosition,
    $appleDistanceList,
    $orangeDistanceList
);

echo $count[0] . PHP_EOL . $count[1];
