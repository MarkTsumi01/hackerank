<?php

// O(n)
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

// O(n)
function hasKey(array $groupList, int $number): bool
{
    foreach ($groupList as $key => $data) {
        if ($key === $number) {
            return true;
        }
    }

    return false;
}

// O(1)
function incrementGroup(array $groupList, int $number): array
{
    $groupList[$number]['count']++;
    $groupList[$number]['sum'] += $number;

    return $groupList;
}

// O(1)
function initGroup(array $groupList, int $number): array
{
    $groupList[$number] = [
        'count' => 1,
        'sum'   => $number,
    ];

    return $groupList;
}

$numberList = [1, 2, 3, 5, 7, 9, 2, 3, 6, 7, 2, 5, 4, 6, 1, 1, 6, 7, 3, 5, 9];

$result = groupNumber($numberList);

foreach ($result as $number => $data) {
    echo $number . ' => count: ' . $data['count'] . ', sum: ' . $data['sum'] . PHP_EOL;
}
