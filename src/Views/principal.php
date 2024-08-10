<?php
    include_once('../services/verificar.login.php');

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['id_login'])) {
        header('Location: index.php');
        exit();
    }
    
    $id_login = $_SESSION['id_login'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    
</body>
</html>