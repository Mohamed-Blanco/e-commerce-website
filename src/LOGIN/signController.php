<?php

session_start();

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
        
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header("Location:login.php?try=2");


    }



}


if (isset($_POST['nemail'])) {
    $email = $_POST['nemail'];

    $password = $_POST['npassword'];
    $passwordPattern = "/^.{3,10}$/";

    $prenom = $_POST['prenom'];
    $pregpren = "/^[a-zA-Z0-9]{3,20}$/";

    $nom = $_POST['nom'];
    $pregnom = "/^[a-zA-Z0-9]{3,20}$/";

    $tele = $_POST['tele'];
    $pregtele = "/^[0-9]{10}$/";

    $cin = $_POST['cin'];
    $pregcin = "/^[a-zA-Z0-9]{6}$/";

    $date = $_POST['date'];
    $pregdate = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

    if (preg_match($passwordPattern, $password) &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        preg_match($pregpren, $prenom) &&
        preg_match($pregnom, $nom) &&
        (preg_match($pregtele, $tele) || $tele == "") &&
        preg_match($pregcin, $cin) &&
        preg_match($pregdate, $date)) {

        echo "all valid";
    


        $userModel = new UserModel($db);


    if (!$userModel->adduser($prenom,$nom,$email,$password,$tele,$cin,$date)) {
        
    
        header("Location:signup.php?err=2");

 

    }
    

    
    header("Location:login.php?insert=1");
}else{
    $_SESSION['nemail'] = $nemail;
    $_SESSION['npassword'] = $password;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['nom'] = $nom;
    $_SESSION['tele'] = $tele;
    $_SESSION['cin'] = $cin;
    $_SESSION['date'] = $date;

    header("Location:signup.php?try=1");


}

    }
  


?>
