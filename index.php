<?php
header("Content-Type: application/json; charset=utf-8");
$array = array(
    $height => (150/100),
    $weight => 65,
    $bmi   => $weight/$height/$height,
);
var_dump($array[$bmi]);
?>
