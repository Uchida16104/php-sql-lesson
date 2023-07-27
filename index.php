<?php
header("Content-Type: application/json; charset=utf-8");
$array = array(
    "height" => round(150/100,1),
    "weight" => 65,
    "bmi"   => round(65/1.5/1.5,1),
);
print 'BMI'.$array["bmi"].'kg/m/m';
?>
