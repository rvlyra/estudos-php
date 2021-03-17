<?php

$hostname = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'loja';


global $pdo;

try {

    $pdo = new PDO("mysql:dbname=" . $dbname . "; host=" . $hostname, $user, $passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falha na conexão. Erro: " . $e->getMessage();
    exit;
}


$sql = $pdo->query("SELECT * FROM users");
$sql->execute();

echo $sql->rowcount();
