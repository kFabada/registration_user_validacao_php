<?php 
    require_once('../config/database.php');
    include_once('../class/login.class.php');

    $login = $_POST["login"];
    $senha = $_POST["password"];

      try{
                $pdo = Database::conexao();
                $query = $pdo->prepare("SELECT * FROM usuario 
                WHERE vch_login = :vch_login and vch_senha = :vch_senha");
                $query->bindParam(':vch_login', $login);
                $query->bindParam(':vch_senha', $senha);
                $query->execute();
                $result = $query->fetch();

        }catch(Exception $e){
          echo "falha na busca" . $e->getMessage();
        }
            

    if(!empty($result)){
        session_start();
        $_SESSION['id'] = $result['id_login'];
        $_SESSION['login'] = $result['vch_login'];
        $_SESSION['password'] = $result['vch_senha'];           
            header('location:principal.php');

            
       }else{
        echo "Falha no login!";
       }     


    
   



?>