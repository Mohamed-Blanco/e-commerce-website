

<?php 
         include '../PDOModel.php';

        class Products{
            
            public $price = 9999;

            public function __construct($priceprod = 9999) {
                $this->price = $priceprod;
            }

            

            public function getFilteredProducts(){
                
               
                $conn = PDOModel::getconection();
                
                $query = "SELECT p.IDp, p.IDcat, p.Prixv, p.Libellép, p.Imagep, c.Libelléca 
                FROM produit p
                INNER JOIN catégorie c ON p.IDcat = c.IDcat
                WHERE p.Prixv <= :price";
                
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':price', $this->price, PDO::PARAM_STR);
                 $stmt->execute();
               
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $result;

            }

            public function getAllcategory(){
                
                $conn = PDOModel::getconection();
                
                $query = "SELECT  Libelléca FROM catégorie LIMIT 8";
                
                $stmt = $conn->prepare($query);
                
                 $stmt->execute();
               
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $result;
            }

            public function getFilteredbyCategory($category){
                
                
                $conn = PDOModel::getconection();
                
                $query = "SELECT p.IDp, p.IDcat, p.Prixv, p.Libellép, p.Imagep, c.Libelléca 
                FROM produit p
                INNER JOIN catégorie c ON p.IDcat = c.IDcat
                WHERE c.Libelléca LIKE :category";
                
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':category', $category, PDO::PARAM_STR);
                 $stmt->execute();
               
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $result;

        }

            public function getAllproducts(){
                $conn = PDOModel::getconection();
                
                $query = "SELECT p.Libellép FROM produit p LIMIT 5";
                
                $stmt = $conn->prepare($query);
                
                 $stmt->execute();
               
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                return $result;
            }
            
        }

?>