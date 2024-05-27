<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["name"])){
    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->Username='paypalabiad@gmail.com';
    $mail->Password='unzvigannfppapte';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;
    $mail->setFrom('paypalabiad@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject=$_POST["name"];
    $mail->Body=$_POST["message"];
    $mail->send();
    //$_SESSION["nom"]=$_POST["name"];
    header("location:../contactusview.php");
    die();

}
?>