<?php

    require 'global.php';

    try{

        $cat = new Categoria();


   

        $cat->setNomeCategoria($_POST['nomecat']);
        $cat->setDescCategoria($_POST['desccat']);

        $cat->cadastroCategoria($cat);

        header("Location: cadastro-categoria-admin.php");
        

    }catch(PDOException $e){    
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }





?>