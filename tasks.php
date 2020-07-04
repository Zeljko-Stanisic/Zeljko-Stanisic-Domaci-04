<?php

$agePerson = 0;

echo "<h1>Zadatak 1</h1> 
Godina rodjenja je: " . (date("Y") - $agePerson) . '<br>';

$str = "The quick brown fox jumps over the lazy dog";

$str = explode(" ", "The quick brown fox jumps over the lazy dog");
    print_r($str);
    echo '<br>';

function shuffleStr($str){
    $outStr = array();
    $strVar = array_keys($str);
    shuffle($strVar);
    foreach ($strVar as $strVar) {
        $outStr[$strVar] = $str[$strVar];
    }
    return $outStr;
}
$shuStr = shuffleStr($str);
print_r ($shuStr);

$str = implode('' , $shuStr);
echo '<br>' . strtolower($str);

array_splice($shuStr, 8, 0, "Obuka");

$str = implode(' ' , $shuStr);
echo '<br>' . ucwords($str);

unset($shuStr[8]);

$shuStr = preg_replace("/o/", "*", $shuStr);

$str = implode(' ' , $shuStr);

echo '<br>' . $str;  






