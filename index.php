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
  $blank=' ';
  $intWeight=65;
  $intHeight=1.5;
  $intBmi=$intWeight/$intHeight/$intHeight;
  $true=true;
  $false=false;
  $null=null;
  $empty='';
  $strWeight=$blank.'体重:'.$blank;
  $strHeight=$blank.'身長:'.$blank;
  $strBmi=$blank.'BMI:'.$blank;
  $boolTrue=$blank.'Boolean値:'.$blank;
  $boolFalse=$blank.'Boolean値:'.$blank;
  echo $strHeight.$height.'m'.$blank;
  echo $strWeight.$weight.'kg'.$blank;
  echo $strBmi.$bmi.'kg/m/m'.$blank;
  echo $boolTrue.$true.$blank;
  echo $boolFalse.$false.$blank;
  echo $null.$blank;
  echo $empty.$blank;
  function calculate($str,$num){
    return $blank.$str.'='.$num.$blank.'boolean(str==num):'.var_dump($str==$num).$blank.'boolean(str===num):'.var_dump($str===$num).$blank;
  }
  function judge01($score){
    print $blank.'$score:'.$blank.$score;
    print $blank.'$score == 100'.$blank.':'.$blank.var_dump($score == 100).$blank;
    print $blank.'$score >= 60'.$blank.':'.$blank.var_dump($score >= 60).$blank;
    if ($score == 100) {
      print $blank.'Perfect.'.$blank;
    } else if ($score >= 60) {
      print $blank.'You passed.'.$blank;
    } else {
      print $blank.'You try again and again.'.$blank;
    }
  }
  function judge02($ts){
    print $blank.'$ts is'.$ts;
    if ($ts%3==0&&$ts%6==0) {
      print $blank.'$ts is multiple of 3 and 6.'.$blank;
    } else if ($ts%3==0&&$ts%6!=0) {
      print $blank.'$ts is multiple of 3 but not 6.'.$blank;
    } else {
      print $blank.'$ts is not the multiple.'.$blank;
    }
  }
  function judge03($random01,$random02){
    if ($random01!=$random02&&$random01<$random02&&$random01%3==0||$random02%3==0):
      print $blank.'random01='.$random01.', random02='.$random02.'.'.$blank.'random02 is larger than random01.'.$blank.'One of them is multiple of 3.'.$blank;
    elseif ($random01==$random02&&$random01%3==0&&$random02%3==0):
      print $blank.'random01='.$random01.', random02='.$random02.'.'.$blank.'They are multiple of 3.'.$blank;
    else:
      print $blank.'They are not multiple of 3.'.$blank;
    endif;
  }
  print calculate('1+1',1+1).$blank;
  $add;
  $add=1;
  $add+=2;
  print $blank.'1+2='.$add.$blank;
  $increase;
  $decrease;
  $increase=3;
  $decrease=2;
  $increase++;
  $decrease--;
  print $blank.'increase(3) is'.$blank.$increase.$blank;
  print $blank.'decrease(2) is'.$blank.$decrease.$blank;
  $boolean0 = true;
  $boolean1 = false;
  if($boolean0 == true && $boolean1 == false) {
    echo $blank."boolean0 is true, and boolean1 is false.".$blank;
  }
  if($boolean0 == true || $boolean1 == true) {
    echo $blank."boolean0 and boolean1 are true.".$blank;
  }
  if(!($boolean0 == true || $boolean1 == false)) {
    echo $blank."boolean0 isn't true and boolean1 isn't false.".$blank;
  }
  $string=$blank.'Hello'.$blank.'PHP'.$blank;
  echo $string;
  judge01(rand(0,100));
  judge02(rand(0,100));
  judge03(rand(0,100),rand(0,100));
  die();
}
$dbh = null;
?>
