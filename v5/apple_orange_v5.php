<?php

// Big O Notation = O(2n) 

function countAppleAndOrangeOnHouse(
    int $houseStartPosition,
    int $houseEndPosition,
    int $appleTreePosition,
    int $orangeTreePosition,
    array $appleFallDistanceList,
    array $orangeFallDistanceList
): array 
{
    $appleOnHouse = countFruitOnHouse(
        $houseStartPosition,
        $houseEndPosition,
        $appleTreePosition,
        $appleFallDistanceList
    );
    $orangeOnHouse = countFruitOnHouse(
        $houseStartPosition,
        $houseEndPosition,
        $orangeTreePosition,
        $orangeFallDistanceList
    );

    $result = [$appleOnHouse, $orangeOnHouse];

    return $result;
}

function countFruitOnHouse(
    int $houseStartPosition,
    int $houseEndPosition,
    int $fruitTreePosition,
    array $fruitFallDistanceList
): int 
{
    $totalFruit = 0;

    foreach ($fruitFallDistanceList as $fruitFallDistance) {
        $fruitPosition = findFruitPosition($fruitTreePosition, $fruitFallDistance);
        $isFruitOnHouse = isFruitOnHouse(
            $fruitPosition,
            $houseStartPosition,
            $houseEndPosition
        );

        if ($isFruitOnHouse) {
            $totalFruit++;
        }
    }

    return $totalFruit;
}

function findFruitPosition(int $fruitTreePosition, int $fruitFallDistance): int
{
    $fruitPosition = ($fruitTreePosition + $fruitFallDistance);

    return $fruitPosition;
}

function isFruitOnHouse(
    int $fruitPosition,
    int $houseStartPosition,
    int $houseEndPostion
): bool 
{
    $isAtOrAfterHouseStartPosition = ($fruitPosition >= $houseStartPosition);
    $isAtOrBeforeHouseEndPosition = ($fruitPosition <= $houseEndPostion);

    $isOnHouse = ($isAtOrAfterHouseStartPosition && $isAtOrBeforeHouseEndPosition) ? true : false;

    return $isOnHouse;
}

$houseStartPosition = 7;
$houseEndPosition = 11;
$appleTreePosition = 5;
$orangeTreePosition = 15;
$appleFallDistanceList = [-2, 2, 1];
$orangeFallDistanceList = [5, -6];

$result = countAppleAndOrange(
    $houseStartPosition,
    $houseEndPosition,
    $appleTreePosition,
    $orangeTreePosition,
    $appleFallDistanceList,
    $orangeFallDistanceList
);

echo $result[0] . PHP_EOL . $result[1];
