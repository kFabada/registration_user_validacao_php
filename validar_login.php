<?php
include_once('./class/usuario.class.php');

$usuario = new Usuario();

session_start();

$vch_login = isset($_POST['login']);

$vch_senha = isset($_POST['vch_senha']);

if(!$vch_login || !$vch_senha){
    echo'Você precisa digitar sua senha e login!';
    exit;
}


?>