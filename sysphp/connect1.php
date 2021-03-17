<?php

$hostname = 'localhost';
$user = 'root';
$password = '';
$dbname = 'loja';

$connect = mysqli_connect($hostname, $user, $password, $dbname);

$sql = mysqli_query($connect, "SELECT * FROM users");

echo mysqli_num_rows($sql);
