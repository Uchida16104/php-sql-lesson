<?php 
try {
  $dbh = new PDO("mysql:host=database; dbname=lesson; charset=utf8", 'root', 'root');
  $dbh->query('SHOW TABLES;');
  $sql = 'SELECT * FROM value;';
  $dbh->query($sql);
  foreach($dbh->query($sql) as $row){
    print($row['id']);
    print($row['name']);
    print($row['score']);
  }
} catch(PDOException $e) {
  print('Error: '.$e->getMessage());
  echo phpinfo();
  die();
}
$dbh = null;
?>
