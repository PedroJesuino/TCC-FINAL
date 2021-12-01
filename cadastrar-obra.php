<?php


session_start();
require_once "global.php";

$mail = new Mail();
$user = new Usuario();

try {


    $nome_arquivo = $_FILES['flImage']['name'];
    $estensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

    //movendo img para a pasta
    if (isset($_FILES['flImage'])) {
        move_uploaded_file($_FILES['flImage']['tmp_name'], 'images/' . $nome_arquivo);
        echo "imagem enviada com sucesso";
    }

    //data atual
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y/m/d H:i:s', time());

    // cadastro obra
    $last_id = $_SESSION["ultimo"];
    $caminho = 'images/' . $nome_arquivo;

    $usuario_id = $_SESSION['usuario_id'];
    $nome_obra = $_POST['nome_Obra'];


    $desc = $_POST['desc'];



    //setando os valores
    $obra = new Obra();
    $cat = new categoriaObra();

    $obra->setNomeObra($nome_obra);
    $obra->setDescObra($desc);
    $obra->setUrlimage($caminho);
    $obra->setImgObra($nome_arquivo);
    $obra->setIdArtista($usuario_id);
    $obra->setStatusObra(2);

    $listaUsuario = $user->listarEmailUsuario($usuario_id);

    foreach ($listaUsuario as $row) {

        $email = $row['emailUsuario'];
        $nome = $row['nomeUsuario'];
    }

    //verifica se obra foi cadastrada
    $obra->insertObra($obra);
    $mensagem = "Sua obra foi enviada para analise espere para mais informaçoês.";
    $mail->enviarEmail($email, $nome, $mensagem);


    //cadastrando na categoria 
    $categoria_radio = $_POST["categoria"];
    $last_id_obra = $_SESSION["idobra"];


    //cadastro da categoria 
    $cat->setIdCategoria($categoria_radio);
    $cat->setIdObra($last_id_obra);
    $cat->cadastroObraCategoria($cat);

    echo "<script>alert('Obra enviada para analise, após analisarmos um email será enviado para você');";
    echo "javascript:window.location='perfil.php';</script>";
} catch (PDOException $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
