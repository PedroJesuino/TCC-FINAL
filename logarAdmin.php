<?php



    require_once 'global.php';
 
    $conexao = Conexao::pegarConexao();
       
    try{ 
           
        
       if((isset($_POST['emailAdmin']))  && (isset($_POST['passwordAdmin']))){

            $email =  $_POST['emailAdmin'];
            $senha = $_POST['passwordAdmin'];
                
            //vericando dados
            $query = "SELECT * FROM tbadmin WHERE emailAdmin='$email' AND senhaAdmin='$senha'";
            $resultado = $conexao->query($query);
            $row = $resultado->rowCount();

                //vericar quantidades de resultados
                if($row == 1){

                    $usuario = $resultado->fetchAll();
                    session_start();

                    //percorrendo dados
                    foreach($usuario as $dados){

                        $_SESSION["admin_name"] = $dados["nomeAdmin"]; 
                        $_SESSION["admin_id"] = $dados["idAdmin"]; 
                        $_SESSION["admin_email"] = $dados["emailAdmin"]; 
                    }
                    header("Location: home-admin.php");
                }else{
                    session_start();
                    $_SESSION['loginErro'] = "Usuário ou senha invalido";
                    header("Location: loginAdmin.php");  
                }
       }else{
           $_SESSION['loginErro'] = "Usuário ou senha invalido";
       }
    }catch(PDOException $e){
        
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();

}