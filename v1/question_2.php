<?php

function simpleArraySum($arr) {

    foreach ($arr as $value)
    {
        $total += $value;
    }
    return $total;
}

$arr = array(1, 2, 3, 4, 10, 11);
echo simpleArraySum($arr);

?>
