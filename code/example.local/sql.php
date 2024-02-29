<?php
declare(strict_types=1);

$pet = 'cat';
$pet = 'cat" left join users on 1=1; --';
$pet = str_replace('"', '\"', $pet);

$qs = "select * from animals where family = \"$pet\";";

echo "<pre>\n";
echo $qs;
echo "\n<npre>\n";


//$dsn = "mysql:host=hw1_mysql;dbname=test_db";
//$dbh = new PDO($dsn, $_SERVER['MYSQL_USER'], $_SERVER['MYSQL_PASSWORD']);
//$sth = $dbh->prepare("select * from animals where family = ?;");
//$sth->execute([$pet]);
