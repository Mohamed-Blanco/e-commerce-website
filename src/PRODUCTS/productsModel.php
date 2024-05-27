

<?php 

        class ProductsModel{

            public function getAllproducts(){
                $conn = new PDO('mysql:host=localhost;port=3308;dbname=pharmacie', 'root', '');
                 $query = "SELECT IDp, Prixv, IDcat, Libellép , Imagep FROM produit";
                $result = $conn->query($query);
                 $data = $result->fetchAll(PDO::FETCH_ASSOC);
            }
        }

?>