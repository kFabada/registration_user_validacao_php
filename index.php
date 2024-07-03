<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index_style.css">
    <title>Login</title>
</head>

<body>
    <header>
        <div class="header">
            <a class="logo" href="#">CyberCoin</a>
            <!-- <h1 class="title">Cadastro</h1> -->
        </div>
    </header>
    <section>
        <main>
            <div>
                <form action="validar_login.php" method="post">
                    <div>
                        <label for="login">Username</label>
                        <div>
                            <input class="container-item" id="login" name="login" type="text" placeholder="login" required>
                        </div>
                    </div>
                    <div>
                        <label for="password">Senha</label>
                        <div>
                            <input class="container-item" id="password" name="password" type="password" placeholder="senha" required>
                        </div>
                    </div>
                        <button class="btn-login" type="submit">Login</button>
                        <a href="cadastro_inicial.php"><button class="btn-cadastro" id="button" type="button">Cadastro</button></a>
                        <a class="btn-link" href="altear_senha.php">Esqueceu a senha</a>
                </form>
            </div>
        </main>
    </section>
</body>

</html>