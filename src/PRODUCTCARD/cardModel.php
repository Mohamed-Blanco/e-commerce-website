
<?php

class CardModel{
    
    public function afficher(){

    }
    public function addtoPanier($Productname){
            session_start();
            
            if(!isset($_SESSION["panier"])){
                $_SESSION['panier'] = array();
            }else{
                if (in_array($Productname, $_SESSION['panier'])) {
                    
                }else{
                $_SESSION['panier'][] = $Productname;
                header("");
                }
            }
            header('Location: ../PRODUCTS/productscontroller.php');
            exit();
            
    }

    public function addtoFavories($Productname){
        session_start();
        
        if(!isset($_SESSION["favories"])){
            $_SESSION['favories'] = array();
        }else{
            if (in_array($Productname, $_SESSION['favories'])) {
                
            }else{
            $_SESSION['favories'][] = $Productname;
            header("");
            }
        }
        header('Location: ../PRODUCTS/productscontroller.php');
        exit();
    }
}

?>