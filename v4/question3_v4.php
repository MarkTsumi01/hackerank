<?php

// Big O Notation = O(n)

function compareScore(array $alicePointList, array $bobPointList): array
{
    $aliceScore = 0;
    $bobScore = 0;

    foreach ($alicePointList as $index => $alicePoint) {
        $bobPoint = $bobPointList[$index];

        if ($alicePoint > $bobPoint) {
            $aliceScore++;
        } elseif ($bobPoint > $alicePoint) {
            $bobScore++;
        }
    }

    $result = [$aliceScore, $bobScore];

    return $result;
}

$alicePointList = [17, 28, 30];
$bobPointList = [99, 16, 30];
$result = compareScore($alicePointList, $bobPointList);

echo 'Alice Score : ' . $result[0] . PHP_EOL . 'Bob Score : ' . $result[1];
