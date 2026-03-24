<?php

// O(n)
function summaryGroupNumber(array $numberList): array
{
    $groupList = [];

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
            $currentNumber = $sortedList[$innerIndex];
            $nextNumber = $sortedList[$innerIndex + 1];

            if ($currentNumber > $nextNumber) {
                $sortedList[$innerIndex] = $nextNumber;
                $sortedList[$innerIndex + 1] = $currentNumber;
            }
        }
    }

    return $sortedList;
}

$numberList = [1, 2, 3, 5, 7, 9, 2, 3, 6, 7, 2, 5, 4, 6, 1, 1, 6, 7, 3, 5, 9];

$sortedList = sortList($numberList);
$groupList = summaryGroupNumber($sortedList);
$result = '';

foreach ($groupList as $group) {
    $result .= implode(' => ', $group) . '<br>';
}

echo $result;
