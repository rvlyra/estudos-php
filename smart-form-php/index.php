<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Smart-Form</title>
</head>

<body>

    .<div class="container">

        <form action="action.php" method="POST">
            <div class="session-1">
                <p>Your name: <input type="text" name="name" /></p>
                <p>Your age: <input type="text" name="age" /></p>
            </div>

            <?php if (!empty($_POST["age"])) : ?>
                <div class="session-2">
                    <p>Your name: <input type="text" name="name" /></p>
                    <p>Your age: <input type="text" name="age" /></p>
                </div>
            <?php endif ?>
            <?php if (!empty($_POST["age"])) : ?>
                <div class="session-3">
                    <p>Your name: <input type="text" name="name" /></p>
                    <p>Your age: <input type="text" name="age" /></p>
                </div>
            <?php endif ?>



            <p><input type="submit" value="Ok" /></p>
        </form>
    </div>

    <script type="text/javascript" src="assets/js/main.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>