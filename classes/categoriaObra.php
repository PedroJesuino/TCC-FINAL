<?php

class categoriaObra
{

    private $idcategoriaObra;
    private $idObra;
    private $idCategoria;


    public function setIdCategoria($idcat)
    {
        $this->idCategoria = $idcat;
    }
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
    public function setIdObra($idobra)
    {
        $this->idObra = $idobra;
    }
    public function getIdObra()
    {
        return $this->idObra;
    }

    public function cadastroObraCategoria($cat)
    {

        $conexao = Conexao::pegarConexao();

        $stmt = $conexao->prepare("INSERT INTO tbcategoriaObra(idCategoria, idObra) VALUES(?,?)");

        $stmt->bindValue(1, $cat->getIdCategoria());
        $stmt->bindValue(2, $cat->getIdObra());

        $stmt->execute();
    }
}
