<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="coontainer">
        <div class="wrapper">

            <div class="card">

                <div class="header-card">
                    <div class="img-login">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h2>Login</h2>
                    <p><i>status load...</i></p>
                </div>
                <form class="form" method="POSt" action="logar.php">

                    <div class="card-group">
                        <label><i class="fas fa-envelope"></i></label>
                        <input type="email" name="email" placeholder="digite o seu email" required>
                    </div>
                    <div class="card-group">
                        <label><i class="fas fa-key"></i></label>
                        <input type="password" name="senha" placeholder="digite a sua senha" required>
                    </div>
                    <div class="card-group">
                        <button type="submit"> Acessar </button>
                    </div>

                </form>
            </div>


        </div>
    </div>
</body>

</html>