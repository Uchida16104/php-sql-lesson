<?php 
try {
  $dbh = new PDO("mysql:host=db; port=3306; dbname=lesson; charset=utf8", 'hirotoshiuchida', 'root');
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
  for ($loop=0; $loop<=100; $loop++){
    judge01(rand($loop,$loop+100));
    judge02(rand($loop,$loop+100));
  }
  $repeat=0;
  while ($repeat<=100):
    judge03(rand($repeat,$repeat+100),rand($repeat,$repeat+100));
    $repeat++;
  endwhile;
  $check_data=round(rand(0,10));
   if (preg_match("/^[a-zA-Z0-9]+$/", $check_data) && $check_data == '') {
     echo "It's included half-width alphanumeric character";
   } else {
     echo "It's excluded half-width alphanumeric character";
   }
  $ary=array();
  $ary=[[0,1,1],[2,3,5],[8,13,21]];
  $ary[3][0]=34;
  $ary[3][1]=55;
  $ary[3][2]=89;
  print $array;
  $fr = fopen("README.md", "r");
  while ($line = fgets($fr)) {
    echo "$line<br>";
  }
  fclose($fr);
  $fw = fopen("README.md", "w");
  fwrite($fw, ' From ITEX Portal.');
  fclose($fw);
  $fr = fopen("README.md", "r");
  while ($line = fgets($fr)) {
    echo "$line<br>";
  }
  fclose($fr);
  $music_genre = '';
  if (isset($_POST['music_genre'])) {
    $music_genre = htmlspecialchars($_POST['music_genre'], ENT_QUOTES, 'UTF-8');
  }
  die();
}
$dbh = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TRY21</title>
</head>
<body>
    <div>Select your favorite music.</div>
    <form method="post">
        <input type="radio" name="music_genre" value="select" <?php if ($music_genre === 'select') { echo 'checked'; } ?> checked>select
        <input type="radio" name="music_genre" value="electronic" <?php if ($music_genre === 'electronic') { echo 'checked'; } ?>>electronic
        <input type="radio" name="music_genre" value="techno" <?php if ($music_genre === 'techno') { echo 'checked'; } ?>>techno
        <input type="radio" name="music_genre" value="ambient" <?php if ($music_genre === 'ambient') { echo 'checked'; } ?>>ambient
        <input type="radio" name="music_genre" value="orchestral" <?php if ($music_genre === 'orchestral') { echo 'checked'; } ?>>orchestral
        <input type="radio" name="music_genre" value="others" <?php if ($music_genre === 'others') { echo 'checked'; } ?>>others
        <input type="submit" value="submit">
    </form>
    <?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div>My favorite music genre is 「<?php echo $music_genre; ?>」.</div>
    <?php endif; ?>
    <?php
define('MAX','3');
$customers = array(
  array('name' => 'Amy', 'age' => '10'),
  array('name' => 'Beth', 'age' => '12'),
  array('name' => 'David', 'age' => '16'),
  array('name' => 'Emma', 'age' => '24'),
  array('name' => 'Frederic', 'age' => '40'),
  array('name' => 'George', 'age' => '72'),
  array('name' => 'Henry', 'age' => '41'),
);
$customers_num = count($customers);
$max_page = ceil($customers_num / MAX);
?>
</body>
</html>
