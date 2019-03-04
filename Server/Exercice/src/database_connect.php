<?php
$db = 'TagBeSill';
$host = '127.0.0.1';
$username = 'root';
$password = '';

try {
$connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);
} catch (\PDOException $exeption) {
print_r('[error] % impossible connection to the DB %s');
print_r($exception);
}
$articles = $connection->query('select * from article');

//echo "<br>". $articles->rowCount()."<br><br>";

//print_r($articles->fetch());
//echo "<br><br><br>";
////print_r($articles->fetch(PDO::FETCH_ASSOC));
//
$allarticles = $articles->fetchAll();