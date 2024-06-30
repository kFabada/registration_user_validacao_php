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
            <a class="logo" href="./index.php">CyberCoin</a>
            <!-- <h1 class="title">Cadastro</h1> -->
        </div>
    </header>
    <main>
        <section>
            <div>
                <form action="processamento/processamento_cadastro.php" method="post">
                    <div>
                        <div>
                        <label for="login">Login</label>
                        </div>
                        <input class="container-item"  id="login" name="login" type="text" required>
                    </div>
                    <div>
                        <div>
                        <label for="senha">Senha</label>
                        </div>
                        <input class="container-item"  id="senha" name="senha" type="password" minlength="8" required>
                    </div>
                    <div>
                        <div>
                        <label for="email">Email</label>
                        </div>
                        <input  class="container-item" id="email" name="email" type="email" required>
                    </div>
                    <div>
                        <div>
                        <label for="telefone">Telefone</label>
                        </div>
                        <input class="container-item" id="telefone" name="telefone" type="tel"  required>
                    </div>
                    <div>
                        <button class="btn" type="submit">Enviar Cadastro</button>
                    </div>
            </div>
            </form>
            </div>
    </main>
    </section>
</body>
</html>