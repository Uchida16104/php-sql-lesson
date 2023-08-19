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
  $blank=' ';
  $strWeight=$blank.'身長:';
  $strHeight=$blank.'体重:';
  $strBmi=$blank.'BMI:';
  $boolTrue=$blank.'Boolean値:';
  $boolFalse=$blank.'Boolean値:';
  echo $strHeight.$height.'m' ;
  echo $strWeight.$weight.'kg';
  echo $strBmi.$bmi.'kg/m/m';
  echo $boolTrue.$true;
  echo $boolFalse.$false;
  echo $null;
  echo $empty;
  function calculate($str,$num){
    return $blank.$str.'='.$num.$blank.'boolean(str==num):'.var_dump($str==$num).$blank.'boolean(str===num):'.var_dump($str===$num);
  }
  function judge($score){
    print $blank.'$score:'.$blank.$score.'';
    print $blank.'$score == 100'.$blank.':'.$blank.var_dump($score == 100);
    print $blank.'$score >= 60'.$blank.':'.$blank.var_dump($score >= 60);
    if ($score == 100) {
      print $blank.'Perfect.';
    } else if ($score >= 60) {
      print $blank.'You passed.';
    } else {
      print $blank.'You try again and again.';
    }
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
    echo " boolean0 is true, and boolean1 is false.";
  }
  if($boolean0 == true || $boolean1 == true) {
    echo " boolean0 and boolean1 are true.";
  }
  if(!($boolean0 == true || $boolean1 == false)) {
    echo " boolean0 isn't true and boolean1 isn't false.";
  }
  $string=' Hello'.' PHP';
  echo $string;
  judge(rand(0,100));
  die();
}
$dbh = null;
?>
