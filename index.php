<?php 
try {
  $dbh = new PDO("mysql:host=127.0.0.1; port=3306; dbname=foo; charset=utf8", 'root', 'root');
  $dbh->query('SHOW TABLES;');
  $sql = 'SELECT * FROM param;';
  $dbh->query($sql);
  foreach($dbh->query($sql) as $row){
    print($row['id']);
    print($row['name']);
    print($row['class']);
    print($row['subject']);
    print($row['score']);
  }
} catch(PDOException $e) {
  print('Error: '.$e->getMessage());
  echo phpinfo();
  $intWeight=65;
  $intHeight=1.5;
  $intBmi=$intWeight/$intHeight/$intHeight;
  $true=true;
  $false=false;
  $null=null;
  $empty='';
  $strWeight=' 身長:';
  $strHeight=' 体重:';
  $strBmi=' BMI:';
  $boolTrue=' Boolean値:';
  $boolFalse='　　Boolean値:';
  echo $strHeight.$height.'m' ;
  echo $strWeight.$weight.'kg';
  echo $strBmi.$bmi.'kg/m/m';
  echo $boolTrue.$true;
  echo $boolFalse.$false;
  echo $null;
  echo $empty;
  function calculate($num){
    echo '='.$num;
  };
  echo ' 1+2'.calculate(1+2);
  echo ' 3-2'.calculate(3-2);
  echo ' 3*4'.calculate(3*4);
  echo ' 6/2'.calculate(6/2);
  echo ' 5%4'.calculate(5%4);
  $add=1;
  $add+=2;
  echo ' 1+2='.$add;
  $increase=3;
  $decrease=2;
  $increase++;
  $decrease--;
  echo ' increase(3) is'.$increase;
  echo ' decrease(2) is'.$derease;
  die();
}
$dbh = null;
?>
