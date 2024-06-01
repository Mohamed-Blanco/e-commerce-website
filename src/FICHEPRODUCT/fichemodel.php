<?php

include '../PDOModel.php';
class Fichemodel
{

    public function getProductinfo($productname)
    {
        $conn = PDOModel::getconection();


        $query = "SELECT p.IDp, p.IDcat, p.Prixv, p.Libellép, p.Imagep, c.Libelléca , p.Codebr , p.Qte , p.Image1, p.Image2 , p.BesoinORD 
            FROM produit p
            INNER JOIN catégorie c ON p.IDcat = c.IDcat
            WHERE p.Libellép LIKE :libeller";


        $stmt = $conn->prepare($query);
        $stmt->bindParam(':libeller', $productname, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public function addtoFavories($Productname){
        

        session_start();
        if (!isset($_SESSION["favories"])) {

            $_SESSION['favories'] = array();

        } else {

            if (in_array($Productname, $_SESSION['favories'])) {

            } else {
                array_push($_SESSION['favories'], $Productname);
                
                
            }

        }
        header("location:../FAVORIES/favoriesController.php");

    }
}

?>