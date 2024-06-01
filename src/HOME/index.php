<?php 
include_once 'productscontroller.php';

$controller = new ProductController();

$data = $controller->index();
$products = $data['products'];
$categories = $data['categories'];
$topSellingProducts=$data['topselling'];
include 'homeview.php';
?>