<?php 
include_once('../class/login.class.php');

$l = new Login();

session_start();

if($SERVER["REQUESTE_METHOD" == "POST"]){
    $login = $_POST["login"];
    $senha = $_POST["password"];

   $result = $l->buscaUsuario();
    if($login != NULL & $senha != NULL ){
        if($result > 0 ){
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $senha;
            header('location:principal.php');
       }else{
        echo "falha no login";
       }     
    }
   
}


?>