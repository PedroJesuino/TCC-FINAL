<?php

require_once "global.php";
require("classes/Conexao.php");
session_start();

$fotoPerfil = $_FILES['your_picture']['name'];
$nomeArtista = $_POST['nomeArtista'];
$descPerfil = $_POST['descPerfil'];
$pais = $_POST['pais'];
$cep = $_POST['cep'];
$log = $_POST['log'];
$numContato = $_POST['numContato'];
$numPessoal = $_POST['numPessoal'];
$emailContato = $_POST['emailContato'];
$linkInsta = $_POST['linkInsta'];
$linkFace = $_POST['linkFacebook'];
$linkTwitter = $_POST['linkTwitter'];
$userid = $_SESSION["usuario_id"];

if (isset($_FILES['your_picture'])) {
    move_uploaded_file($_FILES['your_picture']['tmp_name'], 'images/' . $fotoPerfil);
    echo "imagem enviada com sucesso";
}

$caminho = $fotoPerfil;


try {

    $conexao = Conexao::pegarConexao();

    if ($caminho != "") {
        $stmt5 = $conexao->prepare("update tbusuario set fotoUsuario = './images/$caminho' where idUsuario = '$userid'");
        $stmt5->execute();
    }

    $stmt = $conexao->prepare("update tbusuario set nomeArtista = '$nomeArtista', emailContato = '$emailContato', descPerfil = '$descPerfil' where idUsuario = '$userid'");
    $stmt->execute();

    $stmt2 = $conexao->prepare("update tblocalizacao set paisArtista = '$pais', cepArtista = '$cep', logArtista = '$log' where idUsuario = '$userid'");
    $stmt2->execute();

    $stmt3 = $conexao->prepare("update tbredes set linkIntagram = '$linkInsta', linkTwitter = '$linkTwitter', linkFacebook = '$linkFace' where idUsuario = '$userid'");
    $stmt3->execute();

    $stmt4 = $conexao->prepare("update tbfoneartista set descFoneArtista = '$numContato', descCelArtista = '$numPessoal' where idUsuario = '$userid'");
    $stmt4->execute();

    echo "<script> alert'Dados cadastrados com sucesso'; </script>";
    header("Location: perfil.php");
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
