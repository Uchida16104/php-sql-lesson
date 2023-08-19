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
  function judge01($score){
    print $blank.'$score:'.$blank.$score;
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
  function judge02($ts){
    print $blank.'$ts is'.$ts;
    if ($ts%3==0&&$ts%6==0) {
      print $blank.'$ts is multiple of 3 and 6.';
    } else if ($ts%3==0&&$ts%6!=0) {
      print $blank.'$ts is multiple of 3 but not 6.';
    } else {
      print $blank.'$ts is not the multiple.';
    }
  }
  function judge03($random01,$random02){
    if ($random01!=$random02&&$random01<$random02&&$random01%3==0||$random02%3==0):
      print $blank.'random01='.$random01.', random02='.$random02.'.'.$blank.'random02 is larger than random01.'.$blank.'One of them is multiple of 3.';
    elseif ($random01==$random02&&$random01%3==0&&$random02%3==0):
      print $blank.'random01='.$random01.', random02='.$random02.'.'.$blank.'They are multiple of 3.';
    else:
      print $blank.'They are not multiple of 3.';
    endif;
  }
  print calculate('1+1',1+1);
  $add;
  $add=1;
  $add+=2;
  print $blank.'1+2='.$add;
  $increase;
  $decrease;
  $increase=3;
  $decrease=2;
  $increase++;
  $decrease--;
  print $blank.'increase(3) is'.$blank.$increase;
  print $blank.'decrease(2) is'.$blank.$decrease;
  $boolean0 = true;
  $boolean1 = false;
  if($boolean0 == true && $boolean1 == false) {
    echo $blank."boolean0 is true, and boolean1 is false.";
  }
  if($boolean0 == true || $boolean1 == true) {
    echo $blank."boolean0 and boolean1 are true.";
  }
  if(!($boolean0 == true || $boolean1 == false)) {
    echo $blank."boolean0 isn't true and boolean1 isn't false.";
  }
  $string=$blank.'Hello'.$blank.'PHP';
  echo $string;
  judge01(rand(0,100));
  judge02(rand(0,100));
  judge03(rand(0,100),rand(0,100));
  die();
}
$dbh = null;
?>
