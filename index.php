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
  $weight=65;
  $height=1.5;
  $bmi=$weight/$height/$height;
  $strWeight=' 身長:';
  $strHeight=' 体重:';
  $strBmi=' BMI:';
  echo $strHeight.$height.'m' ;
  echo $strWeight.$weight.'kg';
  echo $strBmi.$bmi.'kg/m/m';
  echo $strWeight===$weight;
  die();
}
$dbh = null;
?>
