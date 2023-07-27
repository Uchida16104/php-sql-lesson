<?php
header("Content-Type: application/json; charset=utf-8");
print 'printで文字を表示します。';
echo 'echoで文字を表示します。';
$height = 1.5;
$weight = 65;
const BMI = $weight/pow($height,2);
print '身長:'.$height.'m';
print '体重:'.$weight.'kg';
echo 'BMI:'.BMI.'(kg/m/m)';

?>
