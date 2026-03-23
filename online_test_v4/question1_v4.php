<?php

// O(n)
function groupNumber(array $numberList): array
{
    $groupList = [];

    foreach ($numberList as $number) {
        if (!isset($groupList[$number])) {
            $groupList[$number] = [
                'number' => $number,
                'count' => 1,
                'sum' => $number,
            ];

            continue;
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
$groupList = groupNumber($sortedList);
$result = '';

foreach ($groupList as $group) {
    $number = $group['number'] . ' => ';
    $count = ' มี ' . $group['count'] . ' ตัว => ';
    $sum = ' sum: ' . $group['sum'] . '<br>';
    $result .= $number . $count . $sum;
}

echo $result;
