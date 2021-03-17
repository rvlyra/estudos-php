<?php
// Define que o arquivo terá a codificação de saída no formato CSS
header("Content-type: text/css");

$cor_fundo = '#CCCCFF';
$cor_texto = '#003333';
$imagem_link = '../img/link.jpg'
?>

body {
background: <?php echo $cor_fundo; ?>;
}

p.texto {
font-family: Verdana, Arial, serif;
color: <?php echo $cor_texto; ?>;
font-size: 12px;
}

a.especial {
text-decoration: none;
background: white url('<?php echo $imagem_link; ?>') 0px 0px no-repeat;
}