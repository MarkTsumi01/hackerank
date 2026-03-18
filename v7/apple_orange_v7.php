<?php

/* มีบ้านอยู่บนเส้นตรง กำหนดด้วยจุดเริ่มและจุดสิ้นสุด และมีต้นไม้ 2 ต้น(แอปปเปิ้ล, ส้ม) 
แต่ละผลหล่นไปในระยะที่กำหนด ให้นับว่ามีผลไม้กี่ผลที่ตกลงไปในช่วงของบ้าน */

// O(2n)
function countAppleAndOrangeInRange(
    int $houseStartPosition,
    int $houseEndPosition,
    int $appleTreePosition,
    int $orangeTreePosition,
    array $appleFallDistanceList,
    array $orangeFallDistanceList
): array 
{
    $appleInHouseRange = countFruitInRange(
        $houseStartPosition,
        $houseEndPosition,
        $appleTreePosition,
        $appleFallDistanceList
    );

    $orangeInHouseRange = countFruitInRange(
        $houseStartPosition,
        $houseEndPosition,
        $orangeTreePosition,
        $orangeFallDistanceList
    );

    $resultList = [$appleInHouseRange, $orangeInHouseRange];

    return $resultList;
}

function countFruitInRange(
    int $houseStartPosition,
    int $houseEndPosition,
    int $fruitTreePosition,
    array $fruitFallDistanceList
): int 
{
    $totalFruit = 0;

    foreach ($fruitFallDistanceList as $fruitFallDistance) {
        $fruitFallPosition = calculateFallingPosition($fruitTreePosition, $fruitFallDistance);
        $isInRange = isWithinRange(
            $fruitFallPosition,
            $houseStartPosition,
            $houseEndPosition
        );

        if ($isInRange) {
            $totalFruit++;
        }
    }

    return $totalFruit;
}

function calculateFallingPosition(int $fruitTreePosition, int $fruitFallDistanceList): int
{
    $fallPosition = ($fruitTreePosition + $fruitFallDistanceList);

    return $fallPosition;
}

function isWithinRange(
    int $position,
    int $houseStartPosition,
    int $houseEndPosition
): bool 
{
    $isInRange = (($position >= $houseStartPosition) && ($position <= $houseEndPosition));

    return $isInRange;
}

$houseStartPosition = 7;
$houseEndPosition = 11;
$appleTreePosition = 5;
$orangeTreePosition = 15;
$appleFallDistanceList = [-2, 2, 1];
$orangeFallDistanceList = [5, -6];

$result = countAppleAndOrangeInRange(
    $houseStartPosition,
    $houseEndPosition,
    $appleTreePosition,
    $orangeTreePosition,
    $appleFallDistanceList,
    $orangeFallDistanceList
);

echo $result[0] . PHP_EOL . $result[1];
