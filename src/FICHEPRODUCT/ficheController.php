<?php

    include './fichemodel.php';

    if(isset($_GET["Productname"])){
        $productname = $_GET["Productname"];
        
        $obj = new Fichemodel();
        $data = $obj->getProductinfo($productname);
        
        foreach ($data as $ligne) {
            
            $id = $ligne["IDp"];
            $Productprix = $ligne["Prixv"];
            $Productcategory = $ligne["Libelléca"];
            $Productname = $ligne["Libellép"];
            $Productimage = $ligne["Imagep"];
            $ProductQte = $ligne["Qte"];

        } 

        include "ficheproduit.php";
    }

    if($_GET["action"] == "favoriser"){
        if( isset($_GET["product"])){
        $obet = new Fichemodel();
        $productname = $_GET["product"];
        $obet->addtoFavories($productname);
        }
    }
   
?>