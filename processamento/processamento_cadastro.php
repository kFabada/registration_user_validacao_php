<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('../class/usuario.class.php');
include_once('../class/conexao.php');

try {

    // $_POST["id"];
    // $_POST["login"];
    // $_POST["password"];
    // $_POST["email"];
    // $_POST["telefone"];

    $user = new Usuario();

    if(isset($_POST["login"])){
        $user->setVch_login($_POST["login"]);
    }
    if(isset($_POST["senha"])){
        $user->setVch_senha($_POST["senha"]);
    }
    if(isset($_POST["email"])){
        $user->setVch_email($_POST["email"]);
    }
    if(isset($_POST["telefone"])){
        $user->setVch_telefone($_POST["telefone"]);
    }

    if(!empty($_POST["id_usuario"])){
    $user->setInt_cadastro_situacao(1);
    $user->cadastraUsuario($pdo);
    }
    
}
catch(Exception $e){
echo "o envio do action para o processar falhou". $e->getMessage();
}





?>