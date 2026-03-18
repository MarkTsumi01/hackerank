<?php
function plusMinus($arr)
{
    $arrayLength = count($arr);
    $positiveNumber = 0;
    $negativeNumber = 0;
    $zeroNumber = 0;

    foreach ($arr as $num) {
        if ($num > 0) {
            $positiveNumber++;
        } elseif ($num < 0) {
            $negativeNumber++;
        } else {
            $zeroNumber++;
        }
    }

    $result1 = $positiveNumber / $arrayLength;
    $result2 = $negativeNumber / $arrayLength;
    $result3 = $zeroNumber / $arrayLength;

    echo $result1 . "<br>";
    echo $result2 . "<br>";
    echo $result3 . "<br>";

}

$arr = array(-4, 3, -9, 0, 4, 1);
plusMinus($arr);
