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
  die();
}
$dbh = null;
?>
