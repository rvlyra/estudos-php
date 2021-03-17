<?php

if ( isset($_POST(['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    $login = addslashes($_POST['email']);
    $login = addslashes($_POST['senha']);
} else {
     header("Location: login.php");
}
