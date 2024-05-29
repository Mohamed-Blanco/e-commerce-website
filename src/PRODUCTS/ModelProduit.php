

<?php 

        

        class Product{
            public $price = 0;

            public function __construct($priceprod = 0 ) {
                $this->price = $priceprod;
            }

            public function getFilteredProducts(){
                
                
                $conn = new PDO('mysql:host=localhost;port=3308;dbname=pharmacie', 'root', '');
                $query = "SELECT IDp, Prixv, IDcat, Libellép, Imagep FROM produit WHERE Prixv > ?";
                $stmt = $conn->prepare($query);
                $stmt->execute([$this->price]);
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $result;

        }

            public function getAllproducts(){
                $conn = new PDO('mysql:host=localhost;port=3308;dbname=pharmacie', 'root', '');
                 $query = "SELECT IDp, Prixv, IDcat, Libellép , Imagep FROM produit";
                $result = $conn->query($query);
                 $data = $result->fetchAll(PDO::FETCH_ASSOC);

                 return $data;
            }
            
        }

?>