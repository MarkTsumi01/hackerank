<?php

class Config
{
    public $setting = "Default";

    // ใส่ & หน้าชื่อฟังก์ชันเพื่อบอกว่าจะ Return แบบ Reference
    public function &getSetting()
    {
        
        return $this->setting;
    }
}

$config = new Config();

// ต้องใส่ & ตอนรับค่าด้วย เพื่อรับ Reference มา
$myVar = &$config->getSetting();

$myVar = "New Value"; // เปลี่ยนค่า

echo $config->setting; // ผลลัพธ์: New Value
