<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('vendor/phpmailer\phpmailer/src/Exception.php');
require_once('vendor/phpmailer\phpmailer/src/SMTP.php');
require_once('vendor/phpmailer\phpmailer/src/PHPMailer.php');
require_once('global.php');



require "vendor/autoload.php";

class Mail extends PHPMailer
{



    public  function enviarEmail($emaildestino, $nome, $mensagem)
    {


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
        $mail->Port       = 465;                                        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


        $mail->setFrom($emaildestino);
        $mail->addAddress($emaildestino);


        $mail->isHTML(true);
        $mail->Subject = "Nova mensagem de Spotlight";
        $mail->Body = "<p>Nos somos da Spotlight. {$nome} {$mensagem}</p>";
        $mail->Send();

        if (isset($_SESSION["admin_id"])) {
            header("Location: aprovaObra.php");
        }
    }
}
