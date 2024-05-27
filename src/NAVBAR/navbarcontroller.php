<?php

if (session_status() == PHP_SESSION_NONE) {
   
    session_start();
}
  

$nbr = count ($_SESSION["panier"]);
include "navbarview.php";

?>