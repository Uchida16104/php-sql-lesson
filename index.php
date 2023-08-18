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
  function calculate($str,$num){
      return ' '.$str.'='.$num.'  boolean(str==num):'.var_dump($str==$num).' boolean(str===num):'.var_dump($str===$num);
  }
  print calculate('1+1',1+1);
  $add;
  $add=1;
  $add+=2;
  print ' 1+2='.$add;
  $increase;
  $decrease;
  $increase=3;
  $decrease=2;
  $increase++;
  $decrease--;
  print ' increase(3) is '.$increase;
  print ' decrease(2) is '.$decrease;
  $boolean0 = true;
  $boolean1 = false;
  if($boolean0 == true && $boolean1 == false) {
    echo "<p>boolean0 is true, and boolean1 is false.</p>";
  }
  if($boolean0 == true || $boolean1 == true) {
    echo "<p>boolean0 and boolean1 are true.</p>";
  }
  if(!($boolean0 == true || $boolean1 == false)) {
    echo "<p>boolean0 isn't true and boolean1 isn't false.</p>";
  }
  $string='Hello'.'PHP';
  echo $string;
  die();
}
$dbh = null;
?>
