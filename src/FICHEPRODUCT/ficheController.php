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
            $Productimage1 = $ligne["Imagep"];
            $Productimage2 = $ligne["Imagep"];
            $ProductQte = $ligne["Qte"];
            $ProductDesc = $ligne["Description"];
            $ProductCons = $ligne["Conseils"];

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

    if($_GET["action"] == "checkout"){
        if( isset($_GET["product"])){
        $qte = $_GET["qte"];
        $productname = $_GET["product"];
        header('Location: ../CHECKOUT/checkoutcontroller.php?type=single&product=' . urlencode($productname) . '&qte=' . urlencode($qte));
        exit();

        }
    }


    
   
?>