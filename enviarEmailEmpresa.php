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


$nome = $_POST['name'];
$email = $_POST['email'];
$assunto = utf8_decode($_POST['subject']);
$telefone = $_POST['contact'];
$mensagem = $_POST['text'];
$data = date('d/m/Y H:i:s');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'spotlight398@gmail.com';
$mail->Password = '0202holofote';
$mail->Port = 587;

$mail->setFrom($email);
$mail->addReplyTo($email);

$mail->addAddress('spotlight398@gmail.com');



$mail->isHTML(true);
$mail->Subject = $assunto;
$mail->Body = "Nome: {$nome}<br>
               Email: {$email}<br>
               Telefone: {$telefone}<br>
               Mensagem: {$mensagem}<br>
               Data/Hora: {$data}";

if ($mail->send()) {
    echo "<script>
  window.location.href='contato.php'; 
  alert('Email enviado com sucesso.'); </script>";
} else {
    echo "<script>alert('Email não enviado.'); </script>";
}
