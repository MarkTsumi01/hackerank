<?php
function groupNumber($numberList)
{
    $group = [];

    foreach ($numberList as $number) {
        if (isset($group[$number])) {
            $group[$number]['count']++;
            $group[$number]['sum'] += $number;
            
            continue;
        }

        $group[$number] = [
            'count' => 1,
            'sum'   => $number,
        ];
    }

    return $group;
}

$numberList = [1, 2, 3, 5, 7, 9, 2, 3, 6, 7, 2, 5, 4, 6, 1, 1, 6, 7, 3, 5, 9];
$result = groupNumber($numberList);
print_r($result);
