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

class ProductController {
    private $db;
    private $product;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->product = new Product($this->db);
    }

    public function index() {
        $products = $this->getProducts();
        $categories = $this->getCategories();

        return array(
            'products' => $products,
            'categories' => $categories
        );
    }

    private function getProducts() {
        $stmt = $this->product->read();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    private function getCategories() {
        $stmt = $this->product->readc();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
}

?>
