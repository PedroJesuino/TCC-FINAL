<?php
class Usuario
{
    private $idUsuario;
    private $nomeUsuario;
    private $emailUsuario;
    private $senhaUsuario;
    private $fotoUsuario;
    private $statusUsuario;


    public function setIdUsuario($id)
    {
        $this->idUsuario = $id;
    }
    public function getIdUsuario()
    {
        return $this->$idUsuario;
    }
    public function setNomeUsuario($nome)
    {
        $this->nomeUsuario = $nome;
    }
    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }
    public function setEmailUsuario($email)
    {
        $this->emailUsuario = $email;
    }
    public function getEmailUsuario()
    {
        return $this->emailUsuario;
    }
    public function setSenhaUsuario($senha)
    {
        $this->senhaUsuario = $senha;
    }
    public function getSenhaUsuario()
    {
        return $this->senhaUsuario;
    }
    public function setFotoUsuario($foto)
    {
        $this->fotoUsuario = $foto;
    }
    public function getFotoUsuario()
    {
        return $this->fotoUsuario;
    }

    public function setStatusObra($status)
    {
        $this->statusUsuario = $status;
    }

    public function getStatusObra()
    {
        return $this->statusUsuario;
    }

    public function insertUsuario($usuario)
    {

        $conexao = Conexao::pegarConexao();

        $fotoPerfil = './img/your-picture.png';
        $descPerfil = 'Por favor antes de enviar uma obra, configure o seu perfil clicando no botão abaixo, para que possamos fazer a verificação de usuário.';



        $stmt = $conexao->prepare("INSERT INTO tbusuario(nomeUsuario, fotoUsuario, emailUsuario, senhaUsuario, nomeArtista, emailContato, descPerfil, idStatusObra) VALUES(:nome, '$fotoPerfil', :email, :senha, :nomeArtista, :emailContato, '$descPerfil', :idStatusObra)");


        $stmt->bindValue(':nome', $usuario->getNomeUsuario());
        $stmt->bindValue(':email', $usuario->getEmailUsuario());
        $stmt->bindValue(':senha', $usuario->getSenhaUsuario());
        $stmt->bindValue(':nomeArtista', $usuario->getNomeUsuario());
        $stmt->bindValue(':emailContato', $usuario->getEmailUsuario());
        $stmt->bindValue(':idStatusObra', $usuario->getStatusObra());

        $stmt->execute();

        $last_id = $conexao->lastInsertId();

        $stmt2 = $conexao->prepare("INSERT INTO tblocalizacao(paisArtista, cepArtista, logArtista, idUsuario) VALUES('Possue', 0, 'logradouros de contato', '$last_id')");
        $stmt3 = $conexao->prepare("INSERT INTO tbfoneartista(descFoneArtista, descCelArtista, idUsuario) VALUES('Esse artista não possue telefone.', 'NA', '$last_id')");
        $stmt4 = $conexao->prepare("INSERT INTO tbredes(linkIntagram, linkTwitter, linkFacebook, idUsuario) VALUES('NA', 'NA', 'NA', '$last_id')");
        $stmt2->execute();
        $stmt3->execute();
        $stmt4->execute();
    }

    public function logar()
    {

        $conexao = Conexao::pegarConexao();

        $query = "SELECT nomeUsuario, emailUsuario, senhaUsuario FROM tbusuario WHERE emailusuario=''";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listarUsuario()
    {

        $userid = $_SESSION["usuario_id"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * from tbusuario where idUsuario = '$userid'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }
    public function listarRedesUsuario()
    {

        $userid = $_SESSION["usuario_id"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * from tbredes where idUsuario = '$userid'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }
    public function listarLocalizacaoUsuario()
    {

        $userid = $_SESSION["usuario_id"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * from tblocalizacao where idUsuario = '$userid'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }
    public function listarFoneArtista()
    {

        $userid = $_SESSION["usuario_id"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * from tbfoneartista where idUsuario = '$userid'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function listarArtista()
    {
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT tbusuario.idUsuario, `nomeArtista`, descPerfil, fotoUsuario, linkIntagram, linkTwitter, linkFacebook from `tbusuario` INNER JOIN tbredes ON tbredes.idUsuario = tbusuario.idUsuario INNER JOIN tbstatusobra ON tbusuario.idStatusObra = tbstatusobra.idStatusObra WHERE tbusuario.idStatusObra = 1 ORDER BY idUsuario DESC";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }


    public function listarEmailUsuario($id)
    {

        $userid = $id;
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * from tbusuario where idUsuario = '$userid'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function listarTodoUsuario()
    {


        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * from tbusuario";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function listarArtistaAprova($id)
    {
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT tbUsuario.idUsuario, fotoUsuario, nomeUsuario, descPerfil, fotoUsuario, descFoneArtista, emailUsuario, linkIntagram, linkFacebook, linkTwitter FROM tbusuario INNER JOIN tbredes on tbusuario.idUsuario = tbredes.idUsuario INNER JOIN tbfoneartista on tbusuario.idUsuario = tbfoneartista.idUsuario INNER JOIN tbstatusobra on tbusuario.idStatusObra = tbstatusobra.idStatusObra WHERE tbusuario.idStatusObra = 2 AND tbusuario.idUsuario = '$id' ORDER BY tbusuario.idUsuario";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }
    public function listarTabelaAprova()
    {
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT tbUsuario.idUsuario,fotoUsuario, nomeUsuario, descPerfil, fotoUsuario, emailUsuario, linkIntagram, linkFacebook, linkTwitter FROM tbusuario INNER JOIN tbredes on tbusuario.idUsuario = tbredes.idUsuario INNER JOIN tbfoneartista on tbusuario.idUsuario = tbfoneartista.idUsuario INNER JOIN tbstatusobra on tbusuario.idStatusObra = tbstatusobra.idStatusObra WHERE tbusuario.idStatusObra = 2  ORDER BY tbusuario.idUsuario";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }
    public function updateAprova($id)
    {

        $con = Conexao::pegarConexao();
        $stmt = $con->prepare("UPDATE tbUsuario set idStatusObra = 1  WHERE idUsuario = '$id'");
        $stmt->execute();

        return True;
    }
    public function deleteUsuario($id)
    {

        $con = Conexao::pegarConexao();
        $stmt = $con->prepare("DELETE FROM tbUsuario WHERE idUsuario = '$id'");
        $stmt->execute();

        return True;
    }
}
