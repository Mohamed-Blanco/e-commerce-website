<?php
 include '../NAVBAR/navbarcontroller.php';
?>
<div  class="p-1 bg-green-100 " >
        <ul id="slidedown" class="flex-row">
            <li class="mt-5 mb-2 text-2xl text-center text-black text-bold">Shop</li>
            <li class="mb-5 text-center text-bold "><span> </span> <span class="text-black text-bold"><i
                        class="fa-solid fa-caret-right"></i> </span></li>
        </ul>
    </div>




<style>
     * {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    }   
</style>

<?php
if(!isset($_SESSION["panier"])){
    session_start();
}

require 'PanierModel.php';
$panierModel = new PanierModel();
$total=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] == 'remove' && isset($_POST['product_name'])) {
        $productNameToRemove = $_POST['product_name'];
        // Removing the product by name from the session array
        foreach ($_SESSION["panier"] as $index => $productName) {
            if ($productName == $productNameToRemove) {
                unset($_SESSION["panier"][$index]);
                break; // Stop the loop after finding and removing the product
            }
        }
        $_SESSION['message'] = "Product removed successfully.";
        header('Location: paniercontroller.php'); // Redirect to refresh the cart
        exit();
    }
}


try {
    if (isset($_SESSION["panier"]) && count($_SESSION["panier"]) > 0) {
        include 'panierview.php';
    } else {
        throw new Exception("Votre panier est vide");
    }
} catch (Exception $e) {
   ?>
   <div style="background-color:white;">
   <div class="bg-green-100 p-5 " >
        <ul id="slidedown" class="flex-rew">
            <li class="text-2xl text-center text-black text-bold mt-5 mb-2">Panier</li>
            <li class="mb-5 text-center text-bold "><span>Home </span> <span class="text-black text-bold"><i
                        class="fa-solid fa-caret-right"></i> Panier</span></li>
        </ul>
    </div>
    <?php
    echo '<section " class="mb-12 mt-12"><div class="flex justify-center items-center mt-20">
            <div class="p-6 bg-gray-50 border border-gray-200 rounded-lg text-center">
                <i class="fas fa-shopping-cart text-blue-500 text-3xl"></i>
                <p class="mt-4 text-lg text-gray-800">' . $e->getMessage() . '</p>
                <a href="../PRODUCTS/productscontroller.php" class="inline-block mt-4 bg-yellow-500 text-blue-500 font-bold py-2 px-4 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 shadow-lg transition ease-in-out duration-150 cursor-pointer">
                Retourner au shopping</a>
            </div>
          </div></section>';
          include '../Footer/Footerview.php';
}
?>
   </div>

