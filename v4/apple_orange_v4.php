<?php

// Big O Notation = O(2n) 

function countAppleAndOrange(
    int $houseStartPosition,
    int $houseEndPosition,
    int $appleTreePosition,
    int $orangeTreePosition,
    array $appleDistanceList,
    array $orangeDistanceList
): array 
{
    $appleOnHouse = countFruitOnHouse(
        $houseStartPosition,
        $houseEndPosition, 
        $appleTreePosition, 
        $appleDistanceList
    );
    $orangeOnHouse = countFruitOnHouse(
        $houseStartPosition, 
        $houseEndPosition, 
        $orangeTreePosition,
        $orangeDistanceList
    );

    $result = [$appleOnHouse, $orangeOnHouse];

    return $result;
}

//Big O Notation = O(n)

function countFruitOnHouse(
    int $houseStartPosition, 
    int $houseEndPostion, 
    int $fruitTreePosition, 
    array $fruitDistance
): int
{
    $fruit = 0;

    foreach ($fruitDistance as $distance) {
        $applePosition = findFruitPosition($fruitTreePosition, $distance);
        $isAppleOnHouse = isOnHouse(
            $applePosition,
            $houseStartPosition,
            $houseEndPostion
        );

        if ($isAppleOnHouse) {
            $fruit++;
        }
    }

    return $fruit;
}

//Big O Notation = O(1)

function findFruitPosition(int $fruitTreePostion, int $distance): int
{
    $fruitPosition = ($fruitTreePostion + $distance);

    return $fruitPosition;
}

//Big O Notation = O(1)

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
    }

    return false;
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
