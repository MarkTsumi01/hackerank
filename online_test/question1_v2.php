<?php

function hasKey(array $groupList, int $number): bool
{
    foreach ($groupList as $key => $data) {
        if ($key === $number) {
            return true;
        }
    }

    return false;
}

function incrementGroup(int $group, int $number): int
{
    $group[$number]['count']++;
    $group[$number]['sum'] += $number;

    return $group;
}

function initGroup(int $group, int $number): int
{
    $group[$number] = [
        'count' => 1,
        'sum'   => $number,
    ];

    return $group;
}

function groupNumber(array $numberList): array
{
    $groupList = [];

    foreach ($numberList as $number) {
        $isHasKey = haskey($groupList, $number);

        if ($isHasKey) {
            $groupList = incrementGroup($groupList, $number);
        } else {
            $groupList = initGroup($groupList, $number);
        }
    }

    return $groupList;
}

$numberList = [1, 2, 3, 5, 7, 9, 2, 3, 6, 7, 2, 5, 4, 6, 1, 1, 6, 7, 3, 5, 9];

$result = groupNumber($numberList);

foreach ($result as $number => $data) {
    echo $number . ' => count: ' . $data['count'] . ', sum: ' . $data['sum'] . PHP_EOL;
}
