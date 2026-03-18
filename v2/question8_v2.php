<?php

//Big O Notation = O(n)

function countTallestCandle(array $candleHeightList): int
{
    if (empty($candleHeightList)) {
        return 0;
    }

    $maxHeight = $candleHeightList[0];
    $tallestCount = 0;

    foreach ($candleHeightList as $candleHeight) {
        if ($candleHeight > $maxHeight) {
            $maxHeight = $candleHeight;
            $tallestCount = 1;
        } elseif ($candleHeight === $maxHeight) {
            $tallestCount++;
        }
    }

    return $tallestCount;
}

$candleHeightList = [3, 2, 1, 3];

echo countTallestCandle($candleHeightList);
