<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["nom"])){
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->Username='pharmaentreprise509@gmail.com';
    $mail->Password='Brrm0344';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;
    $mail->setFrom('pharmaentreprise509@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject=$_POST["name"];
    $mail->Body=$_POST["message"];
    $mail->send();

}
?>