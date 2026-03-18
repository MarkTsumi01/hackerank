<?php

function veryBigsum($arr)
{
    $sum = 0;
    foreach ($arr as $num) {
        $sum += $num;
    }
    return $sum;
}

$arr = array(1000000001, 1000000002, 1000000003, 1000000004, 1000000005);
echo veryBigsum($arr);

?>