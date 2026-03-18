<?php

// Big O Notation = O(1) 

function isKangarooMeetPossible(
    int $firstKangarooStart,
    int $secondKangarooStart,
    int $firstKangarooJump,
    int $secondKangarooJump
): string 
{
    $velocityDifference = ($firstKangarooJump - $secondKangarooJump);

    if ($velocityDifference <= 0) {
        return 'NO';
    }

    $startDifference = ($secondKangarooStart - $firstKangarooStart);

    if ($startDifference % $velocityDifference !== 0) {
        return 'NO';
    }

    return 'YES';
}

$firstKangarooStart = 0;
$secondKangarooStart = 3;
$firstKangarooJump = 4;
$secondKangarooJump = 2;

$result = isKangarooMeetPossible(
    $firstKangarooStart,
    $secondKangarooStart,
    $firstKangarooJump,
    $secondKangarooJump
);

echo $result;
