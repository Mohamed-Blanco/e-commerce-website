
<?php 
require_once 'cardModel.php';

if(isset($_GET["action"])){
    $action = $_GET["action"];
    $Productname=$_GET["Productname"];
    
    $obj = new cardModel();

    if($action == "panier"){
        $obj->addtoPanier($Productname);        
    }
    
    if($action == "favoriser"){
        $obj->addtoFavories($Productname);     
    }
    
}

if(!isset($_GET["action"])){

    include 'Productcard.php';

}


?>



