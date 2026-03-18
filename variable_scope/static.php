<?php

function counter()
{
    static $count = 0; // ค่าจะไม่ถูก reset เมื่อเรียกซ้ำ
    $count++;

    echo $count . "\n";
}

counter(); // 1
counter(); // 2
counter(); // 3
