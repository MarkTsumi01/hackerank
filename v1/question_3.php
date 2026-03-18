<?php

function solve($a0, $a1, $a2, $b0, $b1, $b2)
{
    $aScore = 0;
    $bScore = 0;

    $aScore += ($a0 > $b0 ? 1 : 0) + ($a1 > $b1 ? 1 : 0) + ($a2 > $b2 ? 1 : 0);
    $bScore += ($b0 > $a0 ? 1 : 0) + ($b1 > $a1 ? 1 : 0) + ($b2 > $a2 ? 1 : 0);

    $score = [];
    array_push($score, $aScore, $bScore);
    return $score;
}

$a0 = 17;
$a1 = 28;
$a2 = 30;
$b0 = 99;
$b1 = 16;
$b2 = 8;

$result = solve($a0, $a1, $a2, $b0, $b1, $b2);
echo implode(" ", $result);

?>