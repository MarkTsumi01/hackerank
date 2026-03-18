<?php

function getScore(array $alicePointList, array $bobPointList): array
{
    $aliceScore = 0;
    $bobScore = 0;

    foreach ($alicePointList as $index => $alicePoint) {
        $bobPoint = $bobPointList[$index];

        if ($alicePoint > $bobPoint) {
            $aliceScore++;
        } elseif ($alicePoint < $bobPoint) {
            $bobScore++;
        }
    }
    
    $scoreList = [];
    array_push($scoreList, $aliceScore, $bobScore);

    return $scoreList;
}

$alicePointList = [17, 28, 30];
$bobPointList = [99, 16, 8];
$result = getScore($alicePointList, $bobPointList);

echo implode(" ", $result);
