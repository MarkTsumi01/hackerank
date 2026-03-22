<?php

// O(n)
function groupNumber(array $numberList): array
{
    $groupMap = [];

    foreach ($numberList as $number) {
        if (!isset($groupMap[$number])) {
            $groupMap[$number] = initGroup($number);
        } else {
            $groupMap[$number] = incrementGroup($groupMap[$number], $number);
        }
    }

    return $groupMap;
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
function incrementGroup(array $group): array
{
    $updatedGroup = $group;
    $updatedGroup['count']++;
    $updatedGroup['sum'] += $group['number'];

    return $updatedGroup;
}

// O(n^2)
function sortList(array $numberList): array
{
    $listLength = count($numberList) - 1;
    $result = $numberList;

    for ($outerIndex = 0; $outerIndex < $listLength; $outerIndex++) {
        for ($innerIndex = 0; $innerIndex < $listLength; $innerIndex++) {
            if ($result[$innerIndex] > $result[$innerIndex + 1]) {
                $temp = $result[$innerIndex];
                $result[$innerIndex] = $result[$innerIndex + 1];
                $result[$innerIndex + 1] = $temp;
            }
        }
    }

    return $result;
}

$numberList = [1, 2, 3, 5, 7, 9, 2, 3, 6, 7, 2, 5, 4, 6, 1, 1, 6, 7, 3, 5, 9];

$sortedList = sortList($numberList);
$groupMap   = groupNumber($sortedList);

foreach ($groupMap as $group) {
    $output = $group['number'] . ' => count: ' . $group['count'] . ' sum: ' . $group['sum'] . '<br>';
    
    echo $output;
}
