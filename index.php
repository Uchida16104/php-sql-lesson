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
  $weight=65;
  $height=1.5;
  $bmi=weight/height/height;
  echo '身長：'.height.'m';
  echo phpinfo();
  die();
}
$dbh = null;
?>
