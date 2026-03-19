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
    $ANSWER_NO = 'NO';
    $ANSWER_YES = 'YES';
    
    $jumpDistanceDifference = ($firstKangarooJumpDistance - $secondKangarooJumpDistance);
    $isLessThanOrEqualZero = ($jumpDistanceDifference <= 0);

    if ($isLessThanOrEqualZero) {
        return $ANSWER_NO;
    }

    $startDifference = ($secondKangarooStart - $firstKangarooStart);
    $isMeet = (($startDifference % $jumpDistanceDifference) === 0);

    if (!$isMeet) {
        return $ANSWER_NO;
    }

    return $ANSWER_YES;
}

$firstKangarooStart = 0;
$firstKangarooJumpDistance = 3;
$secondKangarooStart = 4;
$secondKangarooJumpDistance = 2;

$result = isKangarooMeetPossible(
    $firstKangarooStart,
    $firstKangarooJumpDistance,
    $secondKangarooStart,
    $secondKangarooJumpDistance
);

echo $result;
