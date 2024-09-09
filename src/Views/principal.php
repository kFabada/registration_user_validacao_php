<?php
    include_once('../services/verificar.login.php');

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['user_session']) && !isset($_SESSION["user_name"])) {
        header('location: ../../public/index.php');
        exit();
    }

    $logado = $_SESSION['user_session'];
    $username = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style-principal.css">
    <title>Principal</title>
</head>
<body>
    <header class="header">
        <h1 class="user">Bem Vindo <?php echo($username)?></h1>
    </header>
    
      
</body>
</html>