<?php
include "checkoutmodel.php";
include "../NAVBAR/navbarcontroller.php";

if(isset($_GET["type"])){
    if($_GET["type"] == "single"){
        echo "single";
        $productname = $_GET["product"];
    }else{
        echo "Multpile";
    }
}
if(isset($_POST["prix"])){
    $prixtotal = $_POST["prix"];
    $methode =  $_POST["method"];
    
    
}

include "checkoutview.php";
include "../Footer/Footerview.php";



?>