<?php 
    include_once('../class/login.class.php');
    include_once('../Views/principal.php');

    if (!isset($_SESSION)) {
      session_start();
  }

    $login = new Login();

    if($_SERVER["REQUEST_METHOD"] == "POST"){

      $vch_login = $_POST["login"];
      $vch_senha = $_POST["password"];

      $user = $login->verificarLogin($vch_login, $vch_senha);

      if($user){
        if (isset($_SESSION["user_session"]) && isset($_SESSION["user_name"]) ) {
          header('location: ../Views/principal.php');
        }
        else{
          echo "Não Existe cadastro com esses dados";
          exit();
        }
      }
    }

    
?>