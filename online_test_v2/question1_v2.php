<?php

function groupNumber(array $numberList): array
{
    $groupList = [];

    foreach ($numberList as $number) {
        $hasGroup  = hasGroup($groupList, $number);

        if ($hasGroup) {
            $groupList = incrementGroup($groupList, $number);
        } else {
            $groupList = initGroup($groupList, $number);
        }
    }

    return $groupList;
}

function hasGroup(array $groupList, int $number): bool
{
    foreach ($groupList as $group) {
        if ($group['number'] === $number) {
            return true;
        }
    }

    return false;
}

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

function initGroup(array $groupList, int $number): array
{
    $updatedGroupList   = $groupList;
    $updatedGroupList[] = [
        'number' => $number,
        'count'  => 1,
        'sum'    => $number,
    ];

    return $updatedGroupList;
}

$numberList = [1, 2, 3, 5, 7, 9, 2, 3, 6, 7, 2, 5, 4, 6, 1, 1, 6, 7, 3, 5, 9];
$groupList  = groupNumber($numberList);

foreach ($groupList as $group) {
    echo $group['number'] . ' => count: ' . $group['count'] . ' sum: ' . $group['sum'] . '<br>';
}
