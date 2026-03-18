<?php

//Big O Notation = O(n)

function countTallestCandle(array $candleHeightList): int
{
    $maxHeight = $candleHeightList[0];
    $tallestCount = 0;

    foreach ($candleHeightList as $height) {
        if ($height > $maxHeight) {
            $maxHeight = $height;
            $tallestCount = 1;
        } elseif ($height === $maxHeight) {
            $tallestCount++;
        }
    }

    return $tallestCount;
}

$candleHeightList = [3, 2, 1, 3];

$result = countTallestCandle($candleHeightList);

echo $result;
