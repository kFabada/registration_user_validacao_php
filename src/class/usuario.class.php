<?php
include_once('../config/database.php');
include_once('../class/login.class.php');

//class para o cadastro inicial do usuario
class Usuario{

    private $id_usuario;
    private Login $login;
    private $vch_email;
    private $vch_telefone;
    private $int_cadastro_situacao;


public function getLogin(){
  return $this->login;
}

public function setLogin(Login $login) {
  $this->login = $login;
}

  public function getIdUsuario(){
    return $this->id_usuario;
  }

  public function setIdUsuario($id_usuario){
    $this->id_usuario = $id_usuario;
  }


  public function getVch_email(){
    return $this->vch_email;
  }

  public function setVch_email($vch_email){
     $this->vch_email = $vch_email;
  }

  public function getVch_telefone(){
    return $this->vch_telefone;
  }

  public function setVch_telefone($vch_telefone){
     $this->vch_telefone = $vch_telefone;
  }

  public function getint_cadastro_situacao(){
    return $this->int_cadastro_situacao;
  }

  public function setInt_cadastro_situacao($int_cadastro_situacao){
     $this->int_cadastro_situacao = $int_cadastro_situacao;
  }

  public function inserirUsuario($login){

    try{
              $pdo = Database::conexao();
              $pdo->beginTransaction();

                      $stmt = $pdo->prepare("INSERT INTO dados_usuario(vch_email, vch_telefone, int_cadastro_situacao)
                      VALUES(:vch_email, :vch_telefone, :int_cadastro_situacao)");
                      $stmt->bindValue("vch_email", $this->vch_email);
                      $stmt->bindValue("vch_telefone", $this->vch_telefone);
                      $stmt->bindValue("int_cadastro_situacao", $this->int_cadastro_situacao);
                      $stmt->execute();

              $this->id_usuario = $pdo->lastInsertId();

              $pdo->commit();

              $this->setLogin($login);
              
              $this->login->getVch_login();
              $this->login->getVch_senha();

              $this->login->inserirLogin();


      //         try{
      //           $pdo = DataBase::conexao();
      //           $pdo->beginTransaction();

      //                 $stmt = $pdo->prepare("INSERT INTO usuario(vch_login, vch_senha) 
      //                 VALUES(:vch_login, :vch_senha)");
      //                 $stmt->bindValue(":vch_login", $vch_login);
      //                 $stmt->bindValue(":vch_senha", $vch_senha);
      //                 $stmt->execute();

      //           $this->$id_login = $pdo->lastInsertId();

      //           $pdo->commit();
      // }catch(Exception $e){
      //           $pdo->rollBack();
      //           echo "falha na insercao de login" . $e->getMessage();
      // }

      
    }catch(PDOException $e){
      $pdo->rollBack();
      echo 'Falha na Inserção de usuario' .  $e->getMessage();
    }
      
  }

  public function existeEmail($vch_email){
    try{
            $pdo = Database::conexao();
            $consulta = $pdo->prepare("SELECT COUNT(*) FROM dados_usuario WHERE vch_email = :vch_email");
            $consulta->bindParam('vch_email', $vch_email);
            $consulta->execute();
            $count = $consulta->fetchColumn();
        return $count > 0;
    }catch(Exception $e){
        echo "falha na busca" . $e->getMessage();
    }
   
}


}