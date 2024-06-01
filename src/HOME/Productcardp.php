<?php 
include_once 'productscontroller.php';

$controller = new ProductController();

$data = $controller->index();
$products = $data['products'];
$categories = $data['categories'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="../output.css" rel="stylesheet">
</head>
<style>
  .add {
    background-color: #17A841;
  }

  .transition-visibility {
    transition: visibility 0s linear 1000ms, opacity 1000ms linear;
  }
</style>

<body class="bg-white">
<div class="flex flex-wrap justify-center gap-5 p-5">
    <?php 
   
    foreach ($topSellingProducts as $product): ?>
      <div class="w-56 p-4 mx-4 bg-white border-2 group">
        <div class="relative">
          <button href="" class="absolute top-4 right-4">
            <i class="transition-all opacity-0 hover:text-2xl hover:text-red-500 group-hover:opacity-100 duration-400 fa-regular fa-heart"></i>
          </button>
          <button href="" class="absolute top-4 right-16">
            <i class="duration-300 ease-out opacity-0 hover:text-2xl hover:text-black group-hover:opacity-100 fa-solid fa-plus"></i>
          </button>
          <?php
          if ($product['Imagep']) {
            echo '<img src="data:image/png;base64,'.base64_encode($product['Imagep']).'" alt="'.$product['Libellép'].'" class="object-cover w-full h-40">';
          } else {
            echo '<img src="https://via.placeholder.com/200" alt="No image found" class="object-cover w-full h-40">';
          }
          ?>
        </div>
        <div class="group">
          <ul>
            <li class="pt-5 text-xl font-bold text-black"><?= $product['Libellép'] ?></li>
            <li class="text-lg"><?= $product['catégorie'] ?></li>
          </ul>
        </div>
        <div>
          <ul class="flex justify-between pt-5">
            <li class="self-center font-bold text-black transition-all duration-1000 group-hover:hidden group-hover:justify-end md:flex">
              <ul>
                <li><?= $product['Prixv'] ?> dh</li>
                <li class="text-sm">20% TVA inclus</li>
              </ul>
            </li>
            <li>
              <a href="../FICHEPRODUCT/ficheproduit.php?id=<?= $product['IDp'] ?>" class="flex items-center justify-center w-10 h-10 transition-all duration-300 bg-green-400 rounded-full group-hover:w-40 group-hover:px-2 group-hover:bg-green-500">
                <p class="hidden text-sm text-white group-hover:flex">
                  <span class="transition-opacity opacity-100">Acheter</span>
                </p>
                <i class="text-white fa-solid fa-basket-shopping group-hover:mx-2"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <script src="https://kit.fontawesome.com/beb14da2c9.js" crossorigin="anonymous"></script>
</body>

</html>