<?php
try {
    require 'global.php';

    $mail = new Mail();
    $usuario = new Usuario();

    $obra = new Obra();

    $id = $_POST['id'];
    $iduser = $_POST['idus'];
    $lista = $usuario->listarEmailUsuario($iduser);


    foreach ($lista as $row) {
        $email = $row['emailUsuario'];
        $nome = $row['nomeUsuario'];
    }
    if (isset($_POST['aprova'])) {

        $obra->updateAprova($id);
        $mensagem = "Sua obra foi cadastrada com sucesso.";
        $mail->enviarEmail($email, $nome, $mensagem);
        header("Location: aprovaObra.php");
    } elseif (isset($_POST['reprova'])) {
        $mensagem = "Sua obra foi rejeitado pela equipe Spotlight.";
        $mail->enviarEmail($email, $nome, $mensagem);
        $obra->deleteObra($id);
        header("Location: aprovaObra.php");
    }
} catch (PDOException $e) {

    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
