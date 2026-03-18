<?php

$name = "Alice"; 

function greet()
{
    global $name; // ประกาศ Global ก่อนเพื่อให้รูปจักตัวแปรภายนอก
    echo "Hello, $name!"; 
}

greet();
