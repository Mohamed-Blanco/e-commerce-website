<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Product Carousel</title>
  <link href="../output.css" rel="stylesheet">
  <style>
    .carousel-heights {
      height: auto; /* Adjust height dynamically based on content */
      overflow: hidden; /* Hide overflow to avoid display issues */
    }
  </style>
</head>
<body>
  <div class="w-full mx-auto rounded">
    <div id="default-carousel" class="relative p-5" data-carousel="static">
      <div class="relative overflow-hidden carousel-heights">
        <?php
        // Group products into arrays of five for larger screens
        $groupedProducts = array_chunk($products, 5);
        ?>

       <!-- For larger screens (5 products per slide) -->
<!-- For larger screens (5 products per slide) -->
<div class="hidden md:block">
  <?php 
  // Reverse the order of grouped products
  $groupedProductsReversed = array_reverse($groupedProducts);
  foreach ($groupedProductsReversed as $index => $group): ?>
    <?php if (count($group) > 0): ?>
      <div class="block duration-700 ease-in-out <?= $index === 0 ? 'block' : 'hidden' ?>" data-carousel-item>
        <div class="flex items-center justify-center h-full">
          <?php foreach ($group as $product): ?>
            <div class="w-56 p-4 mx-4 bg-white border-2 group">
              <!-- Contenu du produit -->
              <div class="relative">
                <button class="absolute top-4 right-4">
                  <i class="transition-all opacity-0 hover:text-2xl hover:text-red-500 group-hover:opacity-100 duration-400 fa-regular fa-heart"></i>
                </button>
                <button class="absolute top-4 right-16">
                  <i class="duration-300 ease-out opacity-0 hover:text-2xl hover:text-black group-hover:opacity-100 fa-solid fa-plus"></i>
                </button>
                <?php
                if ($product['Imagep']) {
                  echo '<img src="data:image/png;base64,' . base64_encode($product['Imagep']) . '" alt="' . $product['Libellép'] . '" class="object-cover w-full h-40">';
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
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
</div>

<!-- For smaller screens (1 product per slide) -->
<div class="md:hidden">
  <?php foreach ($products as $product): ?>
    <div class="block duration-700 ease-in-out" data-carousel-item>
      <div class="flex items-center justify-center h-full">
        <div class="w-56 p-4 mx-4 bg-white border-2 group">
          <!-- Contenu du produit -->
          <div class="relative">
            <button class="absolute top-4 right-4">
              <i class="transition-all opacity-0 hover:text-2xl hover:text-red-500 group-hover:opacity-100 duration-400 fa-regular fa-heart"></i>
            </button>
            <button class="absolute top-4 right-16">
              <i class="duration-300 ease-out opacity-0 hover:text-2xl hover:text-black group-hover:opacity-100 fa-solid fa-plus"></i>
            </button>
            <?php
            if ($product['Imagep']) {
              echo '<img src="data:image/png;base64,' . base64_encode($product['Imagep']) . '" alt="' . $product['Libellép'] . '" class="object-cover w-full h-40">';
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
      </div>
    </div>
  <?php endforeach; ?>
</div>


      <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          <span class="hidden">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
          <span class="hidden">Next</span>
        </span>
      </button>
    </div>
  </div>
</body>
</html>
