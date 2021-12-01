<?php

class EnviarPerfil
{

    public function listarUsuario()
    {

        $idUsuario = $_GET["clicked"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * from tbusuario where idUsuario = '$idUsuario'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function maxObra()
    {
        $idUsuario = $_GET["clicked"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "select tbusuario.idUsuario, count(tbobra.idObra) as 'qtdObraArtista' from tbusuario INNER JOIN tbObra on tbusuario.idUsuario = tbobra.idUsuario WHERE tbobra.idUsuario = '$idUsuario'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function listarRedesUsuario()
    {

        $idUsuario = $_GET["clicked"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * from tbredes where idUsuario = '$idUsuario'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function listarLocalizacaoUsuario()
    {

        $idUsuario = $_GET["clicked"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * from tblocalizacao where idUsuario = '$idUsuario'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function listarFoneArtista()
    {
        $idUsuario = $_GET["clicked"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * from tbfoneartista where idUsuario = '$idUsuario'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function listarObraArtista()
    {

        $idUsuario = $_GET["clicked"];
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT * FROM tbobra where idUsuario = '$idUsuario'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

        return $lista;
    }
}
