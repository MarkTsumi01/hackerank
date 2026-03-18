<?php

function compareScore(array $alicePointList, array $bobPointList): array
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

    $scoreList = [$aliceScore, $bobScore];

    return $scoreList;
}

$alicePointList = [17, 28, 30];
$bobPointList = [99, 16, 30];
$result = compareScore($alicePointList, $bobPointList);

echo implode(' ', $result);
