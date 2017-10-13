<?php

$array = [
    '55.100', '55.01', '50.001', '55.0010', '50.00'
];

echo '<pre>';
print_r($array);

$pattern = '/([^\.]{0})[\.]?(0+)$/';
$replace = '$1';
for($i=0;$i<count($array);$i++){
    $array[$i] = preg_replace($pattern, $replace, $array[$i]);
}

print_r($array);

//result---->
//Array
//(
//    [0] => 55.100
//    [1] => 55.01
//    [2] => 50.001
//    [3] => 55.0010
//    [4] => 50.00
//)
//Array
//(
//    [0] => 55.1
//    [1] => 55.01
//    [2] => 50.001
//    [3] => 55.001
//    [4] => 50
//)