<?php

try {

    require 'global.php';
    $usuario = new Usuario();
    $mail = new Mail();

    //pegando o id

    $id = $_POST['id'];
    $lista = $usuario->listarEmailUsuario($id);

    //obtendo o e-mail e o nome
    foreach ($lista as $row) {
        $email = $row['emailUsuario'];
        $nome = $row['nomeUsuario'];
    }

    //em que botão foi pressionado
    if (isset($_POST['aprova'])) {
        if ($usuario->updateAprova($id)) {
            $mensagem = "<bold> seu perfil foi aprovado </bold> agora você <br> está entre os principais artistas da Spotlight.";
            $mail->enviarEmail($email, $nome, $mensagem);
            header("Location: aprovaArtista.php");
        }
    }
    //em que botão foi pressionado
    else if (isset($_POST['reprova'])) {
        $mensagem = "seu perfil não foi verificado, caso isso aconteça tente melhorar seu perfil.";
        $mail->enviarEmail($email, $nome, $mensagem);
        $usuario->deleteUsuario($id);
        header("Location: aprovaArtista.php");
    }
} catch (PDOException $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
