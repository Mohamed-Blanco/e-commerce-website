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

    if(isset($_GET["action"])){
        $obj = new Fichemodel();
        $obj->addtoFavories($productname);
        header("location:./ficheproduit.php");
    }
   
?>