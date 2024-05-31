<?php

session_start();

$_SESSION["favories"]=["doliprane","hawai"];

require_once 'favoriesModel.php'; 

if (isset($_GET['delete'])) {
    $indexdel = $_GET['delete'];


    $update=$_SESSION["favories"];
    array_splice($update, $indexdel, 1);




    $_SESSION["favories"]=$update;




}



$x=new FavModel();


$_SESSION["contenues"]=$x->get_favorite($_SESSION["favories"]);


include 'favoriesview.php';
include '../Footer/Footerview.php';


?>