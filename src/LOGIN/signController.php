<?php

require_once 'signmodel.php'; 


$db = new mysqli('localhost', 'root', '', 'pharmacie');

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userModel = new UserModel($db);


    if ($userModel->verify($email,$password)) {
        echo "Welcome";
        exit();
    } else {
        $error = "Invalid username or password.";
        echo $error;

    }



}


if (isset($_POST['nemail'])) {
    $email = $_POST['nemail'];
    $password = $_POST['npassword'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $tele = $_POST['tele'];
    $cin = $_POST['cin'];

    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];



    $date=$year.'/'.$month.'/'.$day;

    $userModel = new UserModel($db);


    if ($userModel->adduser($prenom,$nom,$email,$password,$tele,$cin,$date)) {
        
    } else {
        $error = "Invalid insertion or password.";
        echo $error;

    }



}



header("Location:login.php");


?>
