<?php
include_once 'HomeModel.php';
include '../PDOModel.php';


class HomeController
{
    private $db;
    private $product;

    public function __construct()
    {
        $conn = new PDO('mysql:host=localhost;port=3308;dbname=pharmacie', 'root', '');
        $this->product = new HomeModel($conn);

    }

  

    public function getProducts()
    {
        $stmt = $this->product->read();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    public function getCategories()
    {
        $stmt = $this->product->readc();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }
    public function getTopSellingProducts()
    {
        $stmt = $this->product->readTopSelling();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

}

include_once 'HomeView.php';

?>