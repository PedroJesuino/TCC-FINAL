<?php

    class Categoria{

        private $nomeCategoria;
        private $descCategoria;
        private $imgCategoria;


        function getNomeCategoria(){
            return $this->nomeCategoria;
        }
        function getDescCategoria(){
            return $this->descCategoria;
        }
        function setNomeCategoria($nome){
            $this->nomeCategoria = $nome;
        }
        function setDescCategoria($desc){
            $this->descCategoria = $desc;
        }
        function getImgCategoria(){
            return $this->imgCategoria;
        }

        function setImgCategoria($img){
            $this->imgCategoria = $img;
        }

        public function cadastroCategoria($categoria){


            $conexao = Conexao::pegarConexao();

            $stmt = $conexao->prepare("INSERT INTO tbcategoria(nomeCategoria, descCategoria) VALUES(?, ?)");

            $stmt->bindValue(1, $categoria->getNomeCategoria());
            $stmt->bindValue(2, $categoria->getDescCategoria());
          
         

            $stmt->execute();
            
            


        }
        public function listarTodaCategoria(){

            $conexao = Conexao::pegarConexao();
    
            $querySelect = "SELECT * FROM tbcategoria";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
    
            return $lista;
    
        }
        public function listarCategoria(){

            $conexao = Conexao::pegarConexao();
    
            $querySelect = "SELECT * FROM tbcategoria WHERE idCategoria=1";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
    
            return $lista;
    
        }
        public function listarCat(){

            $conexao = Conexao::pegarConexao();
    
            $querySelect = "SELECT * FROM tbcategoria WHERE idCategoria=2";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
    
            return $lista;
    
        }




    }



?>