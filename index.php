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
            <a class="logo" href="#">CyberCop</a>
            <!-- <h1 class="title">Cadastro</h1> -->
        </div>
    </header>
    <section>
    <main>
        <div class="container">
            <form action="processamento.login.php" method="post">
        
                <div>
                    <label for="login">Login</label>
                    <input id="login" name="login" type="text" required>
                    <div>
                        <label for="password">Senha</label>
                        <input id="password" name="password" type="password" required>
                    </div>
                </div>
                <div>
                    <button type="submit">Login</button>
                    <a href="cadastro_inicial.php">
                        <input type="button" value="Não tem cadastro? Clique aqui!">
                    </a>
                </div>
            </form>
        </div>
    </main>
    </section>
</body>
</html>