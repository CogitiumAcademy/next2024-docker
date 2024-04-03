<?php

echo '<h1>Hello World !</h1>';

//phpinfo();

require_once('mysql_connect.php');

$sql = 'SELECT * FROM members';

$query = $pdo->query($sql);

echo '<pre>';
var_dump($query->fetchAll());
echo '</pre>';