<?php
session_start();

for(  $i=0 ; $i<count($_SESSION["panier"]) ; $i++) {
    echo"".$_SESSION["panier"][$i]."";
}




include '../NAVBAR/navbarcontroller.php';

include 'panierview.php';

include '../Footer/Footerview.php';



?>