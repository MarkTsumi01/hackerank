<?php

// Big O Notation = O(n^2)

function getStaircase(int $totalSteps): string
{
    $tread = '';
    $staircase = '';

    for ($step = 1; $step <= $totalSteps; $step++) {
        $spaceCount = ($totalSteps - $step);
        $spaces = '';

        for ($space = 0; $space < $spaceCount; $space++) {
            $spaces .= ' ';
        }

        $tread .= '#';
        $staircase .= $spaces . $tread . PHP_EOL;
    }

    return $staircase;
}

$stair = 6;

$result = getStaircase($stair);

echo $result;
