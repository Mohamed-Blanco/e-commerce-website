

<?php 

        

        class Product{
            
    
            // Vous pouvez maintenant utiliser $selectedPrice comme bon vous semble
            public $price = 0;

            public function __construct($priceprod = 0) {
                $this->price = $priceprod;
                /*if(isset($_POST['priceRange'])) {
                    $this->price = $_POST['priceRange'];
                }
                echo $this->price;*/
            }

            public function getFilteredProducts(){
              /*  if(isset($_POST['priceRange'])) {
                    $this->price = $_POST['priceRange'];
                }*/
                
                $conn = new PDO('mysql:host=localhost;port=3307;dbname=pharmacie', 'root', '');
                $query = "SELECT IDp, Prixv, IDcat, Libellép, Imagep FROM produit WHERE Prixv > ?";
                $stmt = $conn->prepare($query);
                $stmt->execute([$this->price]);
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $result;

        }

            public function getAllproducts(){
                $conn = new PDO('mysql:host=localhost;port=3307;dbname=pharmacie', 'root', '');
                 $query = "SELECT IDp, Prixv, IDcat, Libellép , Imagep FROM produit";
                $result = $conn->query($query);
                 $data = $result->fetchAll(PDO::FETCH_ASSOC);

                 return $data;
            }
            
        }

?>