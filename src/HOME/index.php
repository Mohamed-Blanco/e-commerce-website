<?php 
include_once 'productscontroller.php';

$controller = new ProductController();

$data = $controller->index();
$products = $data['products'];
$categories = $data['categories'];
include 'homeview.php';
?>