<?php

function sumList(array $numberList): int
{
    $sum = 0;

    foreach ($numberList as $number) {
        $sum += $number;
    }

    return $sum;
}

function isEven(int $number)
{
    if (($number % 2) === 0) {
        return 'true';
    }

    return 'false';
}

function isOdd(int $number)
{
    if (($number % 2) !== 0) {
        return 'true';
    }

    return 'false';
}

function formatList(array $numberList): string
{
    $result    = '[';
    $lastIndex = (count($numberList)) - 1;

    foreach ($numberList as $index => $number) {
        $result .= $number;

        if ($index < $lastIndex) {
            $result .= ', ';
        }
    }

    $result .= ']';

    return $result;
}

$numberList = [23, 13, 56, 12, 7, 89, 33, 20, 34, 8, 66, 10, 16, 72, 4, 3, 11, 55, 16, 19, 47];
$even    = [];
$odd     = [];

foreach ($numberList as $number) {
    $isEven = (($number % 2) === 0);

    if ($isEven) {
        $even[] = $number;
    } else {
        $odd[] = $number;
    }
}

$sumEven = sumList($even);
$sumOdd  = sumList($odd);
$isEven = isEven($sumEven);
$isOdd = isOdd($sumOdd);

echo 'even => ' . formatList($even) . '<br>';
echo 'odd  => ' . formatList($odd)  . '<br>';
echo 'sumEven = ' . $sumEven . ' => ' . $isEven . '<br>';
echo 'sumOdd  = ' . $sumOdd  . ' => ' . $isOdd;
