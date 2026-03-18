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
    $applesOnHouse = 0;
    $orangesOnHouse = 0;

    foreach ($appleDistanceList as $distance) {
        $applePosition = ($appleTreePosition + $distance);
        $isAfterOrAtStart = ($applePosition >= $houseStartPosition);
        $isBeforeOrAtEnd  = ($applePosition <= $houseEndPosition);
        $isAppleOnHouse = ($isAfterOrAtStart && $isBeforeOrAtEnd);

        if ($isAppleOnHouse) {
            $applesOnHouse++;
        }
    }

    foreach ($orangeDistanceList as $distance) {
        $orangePosition = ($orangeTreePosition + $distance);
        $isAfterOrAtStart = ($orangePosition >= $houseStartPosition);
        $isBeforeOrAtEnd  = ($orangePosition <= $houseEndPosition);
        $isOrangeOnHouse = ($isAfterOrAtStart && $isBeforeOrAtEnd);

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
