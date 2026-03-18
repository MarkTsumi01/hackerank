<?php

/* จิงโจ้ 2 ตัววิ่งบนเส้นตรง จะมีจังหวะที่ทั้งสองตัวจะอยู่ตำแหน่งเดียวกันพร้อมกันได้ไหม */

// O(1) 
function isKangarooMeetPossible(
    int $firstKangarooStart,
    int $firstKangarooJumpDistance,
    int $secondKangarooStart,
    int $secondKangarooJumpDistance
): string 
{
    $jumpDistanceDifference = ($firstKangarooJumpDistance - $secondKangarooJumpDistance);
    $isLessThanOrEqualZero = ($jumpDistanceDifference <= 0);

    if ($isLessThanOrEqualZero) {
        return 'NO';
    }

    $startDifference = ($secondKangarooStart - $firstKangarooStart);
    $isNotEqualZero = (($startDifference % $jumpDistanceDifference) !== 0);

    if ($isNotEqualZero) {
        return 'NO';
    }

    return 'YES';
}

$firstKangarooStart = 0;
$firstKangarooJumpDistance = 4;
$secondKangarooStart = 3;
$secondKangarooJumpDistance = 2;

$result = isKangarooMeetPossible(
    $firstKangarooStart,
    $firstKangarooJumpDistance,
    $secondKangarooStart,
    $secondKangarooJumpDistance
);

echo $result;
