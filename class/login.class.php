<?php
require_once('../class/conexao.class.php');
include_once('../class/usuario.class.php');



class Login {


    private $id_login;
    private $vch_login;
    private $vch_senha;


    public function getId_login(){
        return $this->id_login;
    }

    public function setId_login($id_login){
        $this->id_login = $id_login;
     }

    public function getVch_login(){
        return $this->vch_login;
      }
    
      public function setVch_login($vch_login){
         $this->vch_login = $vch_login;
      }
    
      public function getVch_senha(){
        return $this->vch_senha;
      }
    
      public function setVch_senha($vch_senha){
        $this->vch_senha = password_hash($vch_senha, PASSWORD_DEFAULT);
      }
    
      public function inserirLogin(){
        try{
                  $pdo = DataBase::conexao();
                  $pdo->beginTransaction();
                  $stmt = $pdo->prepare("INSERT INTO usuario(vch_login, vch_senha) 
                  VALUES(:vch_login, :vch_senha)");
                  $stmt->bindValue(":vch_login", $this->vch_login);
                  $stmt->bindValue(":vch_senha", $this->vch_senha);
                  $stmt->execute();

                  $this->id_login = $pdo->lastInsertId();

                  $pdo->commit();
        }catch(Exception $e){
                  $pdo->rollBack();
                  echo "falha na insercao de login" . $e->getMessage();
        }
       
      } 

      public function existeUsername(){
        try{
              $pdo = Database::conexao();
              $busca = $pdo->prepare("SELECT COUNT(*) FROM usuario WHERE vch_login = :vch_login");
              $busca->bindParam(':vch_login', $this->vch_login);
              $busca->execute();
              $count = $busca->fetchColumn();
              return $count > 0;
      
        }catch(Exception $e){
          echo "falha no select" . $e->getMessage();
        }
      }

      public function buscaUsuario(){
        try{
                $pdo = Database::conexao();
                $query = $pdo->prepare("SELECT vch_login, vch_senha FROM usuario 
                WHERE vch_login = :vch_login and vch_senha = :vch_senha");
                $query->bindParam(':vch_login', $login);
                $query->bindParam(':vch_senha', $senha);
                $query->execute();
                $result = $query->fetchColumn();
                return $result;
        }catch(Exception $e){
          echo "falha na busca" . $e->getMessage();
        }
      }
    
}



?>