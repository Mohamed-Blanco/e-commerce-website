<?php

session_start();

for(  $i=0 ; $i<count($_SESSION["favories"]) ; $i++) {
    echo"".$_SESSION["favories"][$i]."";
}

include '../NAVBAR/navbarcontroller.php';
include 'favoriesview.php';
include '../Footer/Footerview.php';


?>