<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-cadastro.css">
    <title>Cadastro Inicial</title>
</head>
<body>
    <header>
        <a class="logo" href="../cadastro_usuario/index.php">CyberCoin</a>
        <nav class="container">
            <!-- <div>
                <a class="nav-item" href="#">Home</a>
                <a class="nav-item" href="#">Delivers</a>
                <a class="nav-item" href="#">Buys</a>
                <a class="nav-item" href="#">About</a>
            </div> -->
        </nav>
    </header>
    <main>
        <section>
            <div class="container-form">
            <!-- <h1 class="title-form">Cadastro CyberCoin</h1> -->
                <form action="processamento/processamento_cadastro.php" method="post">
                        <div class="form-group">
                            <div class="form-item">
                                <div>
                                    <label for="username">Username</label>
                                </div>
                                <input type="text" name="username" id="username" placeholder="username" >
                            </div>
                            <div class="form-item">
                                <div>
                                    <label for="password">Password</label>
                                </div>
                                <input type="password" minlength="10" name="password" id="password" placeholder="password">
                            </div>
                            <div class="form-item">
                                <div>
                                    <label for="email">Email</label>
                                </div>
                                <input type="email" name="email" id="email" placeholder="email">
                            </div>
                            <div class="form-item">
                                <div>
                                    <label for="telefone">Telefone</label>
                                </div>
                                <input type="text" maxlength="15" name="telefone" id="telefone" placeholder="telefone">
                            </div>
                            <div>
                                <button id="btn-submit" class="btn-submit" type="submit">Enviar</button>
                            </div>
                        </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>