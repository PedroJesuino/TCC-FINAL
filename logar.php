<?php



require_once 'global.php';


$conexao = Conexao::pegarConexao();


try {
    $artist = new Usuario();



    if ((isset($_POST['emailartist']))  && (isset($_POST['passwordartist']))) {


        $email =  $_POST['emailartist'];
        $senha = $_POST['passwordartist'];

        $query = "SELECT * FROM tbusuario WHERE emailUsuario='$email' AND senhaUsuario='$senha'";
        $resultado = $conexao->query($query);
        $row = $resultado->rowCount();






        if ($row == 1) {

            $usuario = $resultado->fetchAll();
            session_start();
            foreach ($usuario as $dados) {
                $_SESSION["usuario_name"] = $dados["nomeUsuario"];
                $_SESSION["usuario_id"] = $dados["idUsuario"];
                $_SESSION["usuario_email"] = $dados["emailUsuario"];
            }
            header("Location: perfil.php");
        } else {
            session_start();
            $_SESSION['loginErro'] = "Usuário ou senha invalido";
            echo "<script>alert('Cadastro não foi efetuado, senha ou email invalidos.');";
            echo "javascript:window.location='login.php';</script>";
        }
    }
} catch (PDOException $e) {

    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
