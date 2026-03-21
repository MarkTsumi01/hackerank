<?php

// O(n^2)
function groupNumber(array $numberList): array
{
    $groupList = [];

    foreach ($numberList as $number) {
        $hasGroup = hasGroup($groupList, $number);
        echo $hasGroup . '<br>';


        if (!$hasGroup) {
            $groupList = initGroup($groupList, $number);
        } else {
            $groupList = incrementGroup($groupList, $number);
        }
    }

    return $groupList;
}

// O(n)
function hasGroup(array $groupList, int $number): bool
{
    foreach ($groupList as $group) {
        if ($group['number'] === $number) {
            return true;
        }
    }

    return false;
}

// O(n)
function incrementGroup(array $groupList, int $number): array
{
    $updatedGroupList = [];

    foreach ($groupList as $group) {
        if ($group['number'] === $number) {
            $group['count']++;
            $group['sum'] += $number;
        }

        $updatedGroupList[] = $group;
    }

    return $updatedGroupList;
}

// O(1)
function initGroup(array $groupList, int $number): array
{
    $updatedGroupList = $groupList;
    $updatedGroupList[] = [
        'number' => $number,
        'count' => 1,
        'sum' => $number,
    ];

    return $updatedGroupList;
}

// O(n^2)
function sortList(array $numberList): array 
{
    $listLength = (count($numberList) - 1);
    $result = $numberList;
    
    for ($index = 0; $index < $listLength; $index++) {
        for ($index2 = 0; $index2 < $listLength; $index2++) {
            if ($result[$index2] > $result[$index2 + 1]) {
                $temp = $result[$index2];
                $result[$index2] = $result[$index2 + 1];
                $result[$index2 + 1] = $temp;
            }
        }
    }

    return $result;
}

$numberList = [1, 2, 3, 5, 7, 9, 2, 3, 6, 7, 2, 5, 4, 6, 1, 1, 6, 7, 3, 5, 9];

$sortList = sortList($numberList);
$groupList = groupNumber($sortList);

foreach ($groupList as $group) {
    echo $group['number'] . ' => count: ' . $group['count'] . ' sum: ' . $group['sum'] . '<br>';
}
