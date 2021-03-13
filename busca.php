<?php

if (!isset($_GET['/../livro'])) {
    header("Location: index.php");
    exit;
}

/* Conexão */

$nome = "%" . trim($_GET['livro']) . "%";

$dbh = new PDO('mysql:host=localhost; dbname=biblioteca', 'root', '');
$sth = $dbh->prepare('SELECT * FROM `livros` WHERE `nome` LIKE :nome ');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();

$result = $sth->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da busca</title>
</head>

<body>
    <h2>Resultado da busca</h2>
    <?php if (count($result)) : ?>
        foreach ($result as $retur) {
        echo $retur['nome'];
        }
    <?php else : ?>
        echo 'Livro não encontrdo';
    <?php endif; ?>
</body>

</html>