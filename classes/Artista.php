<?php
 class Artista { 

private $idartista;
private $nomeartista;
private $emailartista;
private $artist_pass;




    public function getIdartista(){
        return $this->$idartista;

    }
    public function setIdartista($id){
        $this->idartista = $id;
        
    }
    public function setNomeArtista($nome){
        $this->nomeartista = $nome;
    
    }
    public function getNomeArtista(){
        return $this->nomeartista;

    }
    public function setEmailArtista($email){
        $this->emailartista = $email;

    }
    
    public function getEmailArtista(){
        return $this->emailartista;
    } 
    public function setUsername($user_n){
        $this->username = $user_n;

    }
    public function getusername(){
        return $this->nomeusuario;

    }
    public function setArtista_pass($pass){
        $this->artist_pass = $pass;

    }
    public function getArtista_pass(){
        return $this->artist_pass;

    }
  
         

    
    public function insertArtista($artist){

        $conexao = Conexao::pegarConexao();

        $stmt = $conexao->prepare("INSERT INTO tbartista(nomeartista, emailartista, senhaartista)
        VALUES(?,?,?)");

        $stmt->bindValue(1, $artist->getNomeArtista());
        $stmt->bindValue(2, $artist->getEmailArtista());
        $stmt->bindValue(3, $artist->getArtista_pass());
        

        $stmt->execute();
    }
    public function logar(){

        $conexao = Conexao::pegarConexao();

         $query = "SELECT nomeartista, emailartista, senhaartista FROM tbartista WHERE emailusuario=''";
         $resultado = $conexao->query($query);
         $lista = $resultado->fetchAll();
         return $lista;
    }
    public function listarUsuario(){

        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT idusuario, nomeusuario from tbusuario";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;

    }

}

?>

   
