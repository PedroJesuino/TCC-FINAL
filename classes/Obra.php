<?php

class Obra

{
    private $nomeObra;
    private $idartista;
    private $descObra;
    private $urlimage;
    private $imgObra;
    private $statusObra;

    public function getNomeObra()
    {
        return $this->nomeObra;
    }

    public function getIdArtista()
    {
        return $this->idartista;
    }
    public function getDescObra()
    {
        return $this->descObra;
    }

    public function getUrlimage()
    {
        return $this->urlimage;
    }

    public function getImgObra()
    {
        return $this->imgObra;
    }

    public function setNomeObra($nomeo)
    {
        $this->nomeObra = $nomeo;
    }

    public function setIdArtista($ida)
    {
        $this->idartista = $ida;
    }
    public function setDescObra($desc)
    {
        $this->descObra = $desc;
    }

    public function setUrlimage($url)
    {
        $this->urlimage = $url;
    }

    public function setImgObra($img)
    {
        $this->imgObra = $img;
    }
    public function setStatusObra($status)
    {
        $this->statusObra = $status;
    }

    public function getStatusObra()
    {
        return $this->statusObra;
    }







    public function insertObra($obra)
    {
        $conexao = Conexao::pegarConexao();

        $stmt = $conexao->prepare("INSERT INTO tbobra(nomeObra, descObra, imgObra, urlImagemObra, idUsuario, idStatusObra)
        VALUES(?,?,?,?,?,?)");



        $stmt->bindValue(1, $obra->getNomeObra());
        $stmt->bindValue(2, $obra->getDescObra());
        $stmt->bindValue(3, $obra->getImgObra());
        $stmt->bindValue(4, $obra->getUrlimage());
        $stmt->bindValue(5, $obra->getIdArtista());
        $stmt->bindValue(6, $obra->getStatusObra());

        $stmt->execute();

        $id = $conexao->lastInsertId();
        $_SESSION['idobra'] = $id;
    }
    public function listarObra()
    {
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT tbusuario.idUsuario, descObra, nomeObra, urlImagemObra, linkTwitter, linkIntagram, linkFacebook, nomeArtista, fotoUsuario, descCategoria FROM tbusuario INNER JOIN tbObra on tbusuario.idUsuario = tbobra.idUsuario INNER JOIN tbcategoriaobra on tbobra.idObra = tbcategoriaobra.idObra INNER JOIN tbcategoria on tbcategoriaobra.idCategoria = tbcategoria.idCategoria INNER JOIN tbstatusobra on tbstatusobra.idStatusObra = tbobra.idStatusObra INNER JOIN tbredes on tbusuario.idUsuario = tbredes.idUsuario WHERE tbobra.idStatusObra = 1 ORDER BY tbObra.idObra DESC";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }
    public function updateAprova($id)
    {

        $con = Conexao::pegarConexao();
        $stmt = $con->prepare("UPDATE tbObra set idStatusObra = 1  WHERE idObra = '$id'");
        $stmt->execute();
    }

    public function maxObra()
    {
        $id = $_SESSION['usuario_id'];
        $conexao = Conexao::pegarConexao();

        $querySelect = "select tbusuario.idUsuario, count(tbobra.idObra) as 'qtdObraArtista' from tbusuario INNER JOIN tbObra on tbusuario.idUsuario = tbobra.idUsuario WHERE tbobra.idUsuario = '$id'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function deleteObra($id)
    {

        $con = Conexao::pegarConexao();
        $stmt = $con->prepare("DELETE FROM tbobra WHERE idObra = '$id'");
        $stmt->execute();
    }

    public function listarObraArtista()
    {

        $userid = $_SESSION["usuario_id"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * FROM tbobra where idUsuario = '$userid'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }
    public function   listarcategoriaLiteratura()
    {
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT tbObra.idObra, `nomeArtista`, nomeUsuario,tbusuario.idUsuario,nomeObra, fotoUsuario, urlImagemObra, descObra, linkIntagram, descCategoria, linkTwitter, linkFacebook FROM `tbusuario` INNER JOIN tbobra on tbusuario.idUsuario = tbobra.idUsuario INNER JOIN tbstatusobra ON tbstatusobra.idStatusObra = tbobra.idStatusObra INNER JOIN tbredes ON tbredes.idUsuario = tbusuario.idUsuario INNER JOIN tbcategoriaobra on tbcategoriaobra.idObra = tbobra.idObra INNER JOIN tbcategoria on tbcategoriaobra.idcategoria = tbcategoria.idCategoria WHERE tbobra.idStatusObra = 1 ORDER BY idObra DESC";

        $resultado = $conexao->query($querySelect);
        $listaLiteratura = $resultado->fetchAll();

        return $listaLiteratura;
    }
    public function   listarcategoriaArtes()
    {
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT tbObra.idObra, `nomeArtista`, nomeUsuario,tbusuario.idUsuario,nomeObra, urlImagemObra, fotoUsuario, descObra, linkIntagram, linkTwitter, linkFacebook FROM `tbusuario` INNER JOIN tbobra on tbusuario.idUsuario = tbobra.idUsuario INNER JOIN tbstatusobra ON tbstatusobra.idStatusObra = tbobra.idStatusObra INNER JOIN tbredes ON tbredes.idUsuario = tbusuario.idUsuario INNER JOIN tbcategoriaobra on tbcategoriaobra.idObra = tbobra.idObra INNER JOIN tbcategoria on tbcategoriaobra.idcategoria = tbcategoria.idCategoria WHERE tbobra.idStatusObra = 1 ORDER BY idObra DESC";

        $resultado = $conexao->query($querySelect);
        $listaArtes = $resultado->fetchAll();

        return $listaArtes;
    }

    public function QtdCategoriaObra()
    {

        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT descCategoria, count(tbcategoriaobra.idObra) AS 'qtd' FROM tbcategoria INNER JOIN tbcategoriaobra on tbcategoria.idCategoria = tbcategoriaobra.idCategoria INNER JOIN tbobra on tbObra.idObra = tbcategoriaobra.idObra";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function listarObraAdmin()
    {

        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT tbObra.idObra, `nomeArtista`, nomeUsuario,tbusuario.idUsuario,nomeObra, urlImagemObra, descObra FROM `tbusuario` INNER JOIN tbobra on tbusuario.idUsuario = tbobra.idUsuario INNER JOIN tbStatusObra on tbObra.idStatusObra = tbStatusObra.idStatusObra WHERE tbObra.idStatusObra = 2 ORDER BY idobra";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }
    public function listarObraAdminDois($id)
    {

        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT tbObra.idObra, `nomeArtista`, nomeUsuario,tbusuario.idUsuario,nomeObra, urlImagemObra, descObra FROM `tbusuario` INNER JOIN tbobra on tbusuario.idUsuario = tbobra.idUsuario INNER JOIN tbStatusObra on tbObra.idStatusObra = tbStatusObra.idStatusObra WHERE tbObra.idStatusObra = 2 AND tbObra.idObra = '$id'  ORDER BY idobra";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }
}
