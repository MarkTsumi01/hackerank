<?php

// O(n)
function aggregateGroupNumber(array $numberList): array
{
    $groupList = [];
    // $numberStatsMap = [];

    foreach ($numberList as $number) {
        if (!isset($groupList[$number])) {
            $groupList[$number] = [
                'number' => $number,
                'count' => 0,
                'sum' => 0,
            ];
        }

        $groupList[$number]['count']++;
        $groupList[$number]['sum'] += $number;
    }

    return $groupList;
}

// O(n^2)
function sortList(array $numberList): array
{
    $lastIndex = (count($numberList) - 1);
    $sortedList = $numberList;

    for ($outerIndex = 0; $outerIndex < $lastIndex; $outerIndex++) {
        for ($innerIndex = 0; $innerIndex < $lastIndex; $innerIndex++) {
            $leftNumber = $sortedList[$innerIndex];
            $rightNumber = $sortedList[$innerIndex + 1];

            if ($leftNumber > $rightNumber) {
                $sortedList[$innerIndex] = $rightNumber;
                $sortedList[$innerIndex + 1] = $leftNumber;
            }
        }
    }

    return $sortedList;
}

$numberList = [1, 2, 3, 5, 7, 9, 2, 3, 6, 7, 2, 5, 4, 6, 1, 1, 6, 7, 3, 5, 9];

$sortedList = sortList($numberList);
$groupList = aggregateGroupNumber($sortedList);
$result = '';

foreach ($groupList as $group) {
    $number = $group['number'];
    $count = $group['count'];
    $sum = $group['sum'];
    $result .= $number . ' => ' . ' มี ' . $count . ' ตัว => ' . ' sum: ' . $sum . '<br>';
}

echo $result;
