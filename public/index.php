<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style-index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="header">
            <a class="logo" href="#">CyberCoin</a>
        </div>
    </header>
    <section>
        <main>
            <div>
                <form action="../src/services/verificar.login.php" method="post">
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
                    <a href="../src/Views/cadastro_inicial.php"><button class="btn-cadastro" id="button" type="button">Cadastro</button></a>
                    <a class="btn-link" href="altear_senha.php">Esqueceu a senha</a>
                </form>
            </div>
        </main>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>