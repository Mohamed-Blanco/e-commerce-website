<?php

session_start();

require_once 'signmodel.php'; 


$db = new mysqli('localhost', 'root', '', 'pharmacie');



if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $userModel = new UserModel($db);


    if ($userModel->verify($email,$password)) {
        header("location:../HOME/homeview.php");
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

    $age = $_POST['age'];
    $pregage = "/^[0-9]{2}$/";

    $sexe = $_POST['sexe'];
    $pregsex = "/^[MF]{1}$/";

    $adress = $_POST['adress'];
    $pregadr = "/^[a-zA-Z0-9\s]{1,35}$/";

    $date = $_POST['date'];
    $pregdate = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";


    $isValid = false;

    if (preg_match($passwordPattern, $password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (preg_match($pregpren, $prenom)) {
                if (preg_match($pregnom, $nom)) {
                    if (preg_match($pregadr, $adress)) {
                        if (preg_match($pregsex, $sexe)) {
                            if (preg_match($pregtele, $tele) || $tele == "") {
                                if (preg_match($pregage, $age)) {
                                    if (preg_match($pregdate, $date)) {
                                        $isValid = true;
                                        
                                    } else {
                                        $_SESSION["invalid"]="Invalid date.";
                                    }
                                } else {
                                    $_SESSION["invalid"]="Invalid age.";
                                }
                            } else {
                                $_SESSION["invalid"]="Invalid telephone.";
                            }
                        } else {
                            $_SESSION["invalid"]="Invalid Sex.";
                        }
                    } else {
                        $_SESSION["invalid"]="Invalid adress.";
                    }
                } else {
                    $_SESSION["invalid"]="Invalid nom.";
                }
            } else {
                $_SESSION["invalid"]="Invalid prnom.";
            }
        } else {
            $_SESSION["invalid"]="Invalid email.";
        }
    } else {
        $_SESSION["invalid"]="Invalid password.";
    }
    
    if ($isValid) {
        echo "All valid.";
    
    
    
    $userModel = new UserModel($db);


    if (!$userModel->adduser($prenom,$nom,$email,$password,$tele,$date,$sexe,$age,$adress)) {
        
    
        header("Location:signup.php?err=2");

 

    }
    

    
    header("Location:login.php?insert=1");
}else{
    $_SESSION['nemail'] = $nemail;
    $_SESSION['npassword'] = $password;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['nom'] = $nom;
    $_SESSION['tele'] = $tele;
    $_SESSION['sexe'] = $sexe;
    $_SESSION['date'] = $date;
    $_SESSION['adress'] = $adress;
    $_SESSION['age'] = $age;



    header("Location:signup.php?x=1");


}

}




    



  


?>
