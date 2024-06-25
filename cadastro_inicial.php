<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/cadastro_inicial_style.css">
    <title>Cadastro de Usuario</title>
</head>

<body>
    <header>
        <div class="header">
            <a class="logo" href="#">CyberCop</a>
            <!-- <h1 class="title">Cadastro</h1> -->
        </div>
    </header>
    <main>
        <div>
            <form action="processamento/processamento_cadastro.php" method="post">
                <div>
                    <label for="login">Login</label>
                    <input id="login" name="login" type="text" required>
                    <label for="senha">Senha</label>
                    <input id="senha" name="senha" type="password" minlength="8" required>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" required>
                    <label for="telefone">Telefone</label>
                    <input id="telefone" name="telefone" type="tel" required>
                    <div>
                        <button type="submit">Enviar Cadastro</button>
                        <a href="altear_senha.php">Esqueceu a senha</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>