<?php

session_start();

require_once 'favoriesModel.php'; 



$x=new UserModel();

$_SESSION["contenues"]=$x->get_favorite($_SESSION["favories"]);


include 'favoriesview.php';
include '../Footer/Footerview.php';


?>