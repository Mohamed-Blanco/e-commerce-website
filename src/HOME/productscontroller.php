<?php
/*
include_once 'database.php';
include_once 'productsModel.php';

class ProductController {
    private $db;
    private $produit;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->produit = new Product($this->db);
    }

    public function index() {
        $stmt = $this->produit->read();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //include 'Productcard.php';
        return $products;
    }
}
*/

include_once 'database.php';
include_once 'productsModel.php';
include '../PDOModel.php';

class ProductController {
    private $db;
    private $product;

    public function __construct() {
       /* $database = new Database();
        $this->db = $database->getConnection();
        $this->product = new Product($this->db);*/
        $conn=PDOModel::getconection();
        $this->product=new Product($conn);

    }

    public function index() {
        $products = $this->getProducts();
        $categories = $this->getCategories();
        $topSellingProducts=$this->getTopSellingProducts();

        return array(
            'products' => $products,
            'categories' => $categories,
            'topselling'=>$topSellingProducts
        );
    }

    public function getProducts() {
        $stmt = $this->product->read();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    public function getCategories() {
        $stmt = $this->product->readc();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
    public function getTopSellingProducts() {
        $stmt = $this->product->readTopSelling();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }
}

?>
