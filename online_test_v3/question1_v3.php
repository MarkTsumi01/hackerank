<?php

// O(n)
function groupNumber(array $numberList): array
{
    $groupList = [];

    foreach ($numberList as $number) {
        if (!isset($groupList[$number])) {
            $groupList[$number] = initGroup($number);

            continue;
        }

        $groupList[$number] = incrementGroup($groupList[$number]);
    }

    return $groupList;
}

// O(1)
function initGroup(int $number): array
{
    $group = [
        'number' => $number,
        'count' => 1,
        'sum' => $number,
    ];

    return $group;
}

// O(1)
function incrementGroup(array $groupList): array
{
    $updatedGroup = $groupList;
    $updatedGroup['count']++;
    $updatedGroup['sum'] += $groupList['number'];

    return $updatedGroup;
}

// O(n^2)
function sortList(array $numberList): array
{
    $lastIndex = (count($numberList) - 1);
    $sortedList = $numberList;

    for ($outerIndex = 0; $outerIndex < $lastIndex; $outerIndex++) {
        for ($innerIndex = 0; $innerIndex < $lastIndex; $innerIndex++) {
            if ($sortedList[$innerIndex] > $sortedList[$innerIndex + 1]) {
                $temp = $sortedList[$innerIndex];
                $sortedList[$innerIndex] = $sortedList[$innerIndex + 1];
                $sortedList[$innerIndex + 1] = $temp;
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
    $result .= $group['number'] . ' => count: ' . $group['count'] . ' sum: ' . $group['sum'] . '<br>';
}

echo $result;
