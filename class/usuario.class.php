<?php
require_once('../class/conexao.php');

//class para o cadastro inicial do usuario
class Usuario{

    private $id_usuario;
    private $vch_login;
    private $vch_senha;
    private $vch_email;
    private $vch_telefone;
    private $int_cadastro_situacao;


//     id_usuario
//     vch_login
//     vch_senha
//     vch_email
//     vch_telefone
//     $int_cadastro_situacao;

  public function getIdUsuario(){
    return $this->id_usuario;
  }

  public function setIdUsuario($id_usuario){
    $this->id_usuario = $id_usuario;
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

  public function buscaUsuario($conn, $id_usuario){
      try {
        $sql = $conn->prepare("SELECT * FROM usuario_cadastro
        WHERE 'id_usuario' = $id_usuario" );
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
      if($result){
        return $result[""];
      }
      else{
        echo"sem dados";
      }
        
  
      }
      catch(Exception $e) {
        echo 'falha na busca de usuario'. $e->getMessage() .'';
      }
  }

  public function inserirUsuario($conn){
      try {
                // setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
             
                date_default_timezone_set('America/Sao_Paulo'). $dataAtual = date('d-m-Y');
                $sql = $conn->prepare("INSERT INTO usuario_cadastro( vch_login, vch_senha, vch_email, vch_telefone, int_cadastro_situacao, vch_date) 
                VALUES (:vch_login, :vch_senha, :vch_email,:vch_telefone,:int_cadastro_situacao, :vch_date )");
                $sql->bindValue(':vch_login', $this->vch_login);
                $sql->bindValue(':vch_senha', $this->vch_senha);
                $sql->bindValue(':vch_email', $this->vch_email);
                $sql->bindValue(':vch_telefone', $this->vch_telefone);
                $sql->bindValue(':int_cadastro_situacao', $this->int_cadastro_situacao);
                $sql->bindValue(':vch_date', $dataAtual);
                $sql->execute();

                $this->id_usuario = $conn->lastInsertId();
                echo "cadastro completo";
                header("Location: ../index.php");
      }
      catch (Exception $e) {
        echo "falha em cadastra usuario no banco". $e->getMessage();
      }

     
  }
  

  

}  

?>