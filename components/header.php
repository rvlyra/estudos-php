<div class="menu">
    <ul>
        <li><a href="?pg=home.php" class="active" rel="nofollow">Home</a></li>
        <li><a href="?pg=sobre.php" class="active" rel="nofollow">Sobre</a></li>
        <li><a href="?pg=produtos.php" class="active" rel="nofollow">Produtos</a></li>
        <li><a href="?pg=servicos.php" class="active" rel="nofollow">Serviços</a></li>
        <li><a href="?pg=fale_conosco.php" class="active" rel="nofollow">Fale Conosco</a></li>
    </ul>
</div>


<div id="cont">
    <?php
    $pg = (isset($_GET['pg'])) ? $_GET['pg'] : null;  /*Verifica se a variável $pg tem algum valor, se não... Atribui um valor defalt pra variável */

    if ($pg == '') {
        include('home.php');
    } elseif (file_exists($pg)) {
        include $pg;
    } else {
        include "404.php";    /*Aqui ele vai chamar a página de erro.. Coloque a sua...*/
    }
    ?>
</div>