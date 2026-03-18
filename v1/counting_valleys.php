<?php

//Big O Notation = O(n)

function countingValleys(int $step, string $path): int
{
    $seaLevel = 0;
    $valleyCount = 0;

    for ($index = 0; $index < $step; $index++) {
        $isGoingUp = ($path[$index] === 'U');

        if ($isGoingUp) {
            $seaLevel++;
            $isBackAtSeaLevel = ($seaLevel === 0);

            if ($isBackAtSeaLevel) {
                $valleyCount++;
            }
        } else {
            $seaLevel--;
        }
    }

    return $valleyCount;
}

$path = 'UDDDUDUU';
$step = 8;

$result = countingValleys($step, $path);

echo $result;
