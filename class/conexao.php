<?php
//conexao com postgres usando pdo
$host = "localhost";
$dbname = "cadastro_usuario";
$user = "postgres";
$dbpass = "1234";

try {
    // sgbd:host:port:dbname
    // usuario
    // senha
    // errmode
    $conn = new PDO("pgsql:host=$host;port=5432;dbname=$dbname;", $user, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "conectado no banco";
} catch (PDOException $e) {
    echo "falha na conexao";
    die($e->getMessage());
}
