<?php

if (session_status() == PHP_SESSION_NONE) {
   
    session_start();
}
  
if(isset($_SESSION["panier"])) {
$nbr = count ($_SESSION["panier"]);
}else{
    $nbr = 0;
}
include "navbarview.php";

?>