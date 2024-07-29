<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('../class/usuario.class.php');
require_once('../class/conexao.class.php');

try {

    // $_POST["id"];
    // $_POST["login"];
    // $_POST["password"];
    // $_POST["email"];
    // $_POST["telefone"];

    $user = new Usuario();
    $login = new Login();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_POST["username"])){
            $username = $login->existeUsername($_POST["username"]);
                 if($username == true){
                     throw new Exception("username ja existente no banco");
               }
         }
            $login->setVch_login($_POST["username"]);
        }
        
        if(isset($_POST["password"])){
            $login->setVch_senha(password_hash($_POST['password'], PASSWORD_DEFAULT));
        }

        if(isset($_POST["email"])){
            $email = $user->existeEmail($_POST["email"]);
                if($email == true){
                    throw new Exception("email ja existente no banco");
            }
            $user->setVch_email($_POST["email"]);
        }
        
        if(isset($_POST["telefone"])){
            $user->setVch_telefone($_POST["telefone"]);
        }

        $user->setInt_cadastro_situacao(1);

        if((isset($_POST["username"])) && (isset($_POST["email"]))){
        
        $user->inserirUsuario($login); 
    }
}
catch(Exception $e){
    $pdo->rollBack();
    echo "processamento falhou". "<br>" . $e->getMessage();
}





?>