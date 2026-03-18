<?php

//Big O Notation = O(n)

function countingValley(int $step, string $path): int
{
    $seaLevel = 0;
    $valleyCount = 0;

    for ($index = 0; $index < $step; $index++) {
        $isGoingUp = ($path[$index] === 'U');
        $change = -1;

        if ($isGoingUp) {
            $change = 1;
        }

        $seaLevel += $change;

        if (!$isGoingUp || $seaLevel !== 0) {
            continue; 
        }

        $valleyCount++;
    }

    return $valleyCount;
}

$path = 'UDUUUDUDDD';
$step = 10;

echo countingValley($step, $path);
