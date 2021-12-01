<?php
date_default_timezone_set('America/Sao_Paulo');

require_once "global.php";
require "vendor/autoload.php";
require_once('vendor/phpmailer\phpmailer/src/Exception.php');
require_once('vendor/phpmailer\phpmailer/src/SMTP.php');
require_once('vendor/phpmailer\phpmailer/src/PHPMailer.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$nome1 = $_POST['txNome1'];
$nome2 = $_POST['txNome2'];
$nomeCompleto = $nome1 . ' ' . $nome2;
$email = $_POST['txEmail'];
$telefone = $_POST['txTelefone'];
$mensagem = $_POST['txMensagem'];
$data = date('d/m/Y H:i:s');

$usuario = new EnviarPerfil();

$listarUsuario = $usuario->listarUsuario();

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'spotlight398@gmail.com';
$mail->Password = '0202holofote';
$mail->Port = 587;

$mail->setFrom($email);
$mail->addReplyTo($email);

foreach ($listarUsuario as $row) {
  $mail->addAddress($row['emailContato']);
}


$mail->isHTML(true);
$mail->Subject = "Nova mensagem de Spotlight";
$mail->Body = "Nome: {$nomeCompleto}<br>
               Email: {$email}<br>
               Telefone: {$telefone}<br>
               Mensagem: {$mensagem}<br>
               Data/Hora: {$data}";

if ($mail->send()) {
  echo "<script>
  window.location.href='visualizarPerfil.php?clicked=  " . $row['idUsuario'] . " '; 
  alert('Email enviado com sucesso.'); </script>";
} else {
  echo "<script>alert('Email não enviado.'); </script>";
}
