<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('vendor/phpmailer\phpmailer/src/Exception.php');
require_once('vendor/phpmailer\phpmailer/src/SMTP.php');
require_once('vendor/phpmailer\phpmailer/src/PHPMailer.php');
require_once('global.php');
require "vendor/autoload.php";

try {

    $mail = new PHPMailer(true);
    //Server settings

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'SSL';                               //Enable SMTP authentication
    $mail->Username   = 'spotlight398@gmail.com';                     //SMTP username
    $mail->Password   = '0202holofote';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    $mail->setFrom($_POST['emailartist']);
    $mail->addAddress($_POST['emailartist']);


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Cadastro realizado.';
    $mail->Body    = ' <p>Olá seu cadastro foi confirmado espere para mais informações, ao entrar no perfil, editar o mesmo para que possamos fazer a verificação de usuário</p> ';
    $mail->AltBody = '';


    $usuario = new Usuario();
    $usuario->setNomeUsuario($_POST['nomeartist']);
    $usuario->setEmailUsuario($_POST['emailartist']);
    $usuario->setSenhaUsuario($_POST['passwordartist']);
    $usuario->setStatusObra(2);


    if ($mail->send()) {
        $usuario->insertUsuario($usuario);
        header("Location: login.php");
    } else {
        echo "<script> alert('Erro ao cadastrar email.'); </script>";
        header("Location: registro.php");
    }
} catch (Exception $e) {

    echo '<pre>';
    print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
