<?php

$numbers = [23, 13, 56, 12, 7, 89, 33, 20, 34, 8, 66, 10, 16, 72, 4, 3, 11, 55, 16, 19, 47];
$even = [];
$odd = [];

foreach ($numbers as $number) {
    if ($number % 2 === 0) {
        $even[] = $number;
    } else {
        $odd[] = $number;
    }
}

$sumEven = 0;
foreach ($even as $number) {
    $sumEven += $number;
}

$sumOdd = 0;
foreach ($odd as $number) {
    $sumOdd += $number;
}

$isEvenSumEven = ($sumEven % 2 === 0);
$isOddSumOdd = ($sumOdd % 2 !== 0);

echo "even => [";
foreach ($even as $index => $number) {
    echo $number;
    if ($index < count($even) - 1) {
        echo ", ";
    }
}
echo "]\n";

echo "odd  => [";
foreach ($odd as $index => $number) {
    echo $number;
    if ($index < count($odd) - 1) {
        echo ", ";
    }
}
echo "]\n";

echo "sumEven = " . $sumEven . " => " . ($isEvenSumEven ? "true" : "false") . "\n";
echo "sumOdd  = " . $sumOdd  . " => " . ($isOddSumOdd  ? "true" : "false") . "\n";
