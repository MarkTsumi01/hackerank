<?php

function addBonus(&$salary) 
{
    $salary += 5000;
}

$mySalary = 30000;

addBonus($mySalary);

echo $mySalary; // ผลลัพธ์: 35000
