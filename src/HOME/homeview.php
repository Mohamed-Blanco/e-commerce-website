<?php
include '../NAVBAR/navbarcontroller.php'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Radio+Canada+Big:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>
<style>
    .carousel-height {
        height: 500px;
        /* Adjust the height as needed */
    }

    .carousel-height-phone {
        height: 400px;
    }
</style>
<style>
    .carousel-container {
        display: flex;
        overflow: hidden;
        width: 100%;
    }

    .slides-container {
        display: flex;
        transition: transform 0.5s ease;
    }

    .slide {
        flex: 0 0 calc(25% - 20px);
        /* Adjusted for padding */
        box-sizing: border-box;
        text-align: center;
        padding: 0;
        margin: 0;
    }

    .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);

        color: white;
        padding: 10px;
        cursor: pointer;
    }

    .arrow.left {
        left: 10px;
    }

    .arrow.right {
        right: 10px;
    }
</style>

<style>
    * {
        color: #333333;
    }

    .poppins {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .pulse:hover {
        background-color: #17A841;
    }
    @media (max-width: 767px) {
    .carousel-nav-buttons {
        display: block; /* Afficher les boutons de navigation */
    }
}

/* Pour les grands écrans */
@media (min-width: 768px) {
    .carousel-nav-buttons {
        display: none; /* Cacher les boutons de navigation */
    }
}
</style>



<body>
    <?php include 'Carousel1.php' ?>

    <div class="md:flex m-10 md:justify-between">
        <span class="shrink-0 px-6 poppins font-bold text-2xl">Nouveaux produits du mois : </span>
        <a  href="../PRODUCTS/productscontroller.php" class="  "><button
                class=" m-5  md:m-0 rounded-full bg-black w-28 h-9 poppins text-white pulse">Voir Tout <i
                    class="text-white fa-solid fa-arrow-right  "> </i></button></a>
    </div>


    <!--new Products 15 Code Begin Here -> :-->

    <div class="mx-auto mt-10 rounded w-100">

        <div id="default-carousel" class="relative" data-carousel="static">

            <!-- Apply the carousel-height class here -->
            <div class="relative overflow-hidden carousel-height">
                <?php

                $obj = new HomeController();
                $result = $obj->getProducts();

                $numRows = count($result);
                $numSlides = ceil($numRows / 5);

                for ($j = 0; $j < $numSlides; $j++) {
                    ?>
                    <div class="flex items-center justify-center hidden duration-700 ease-in-out " data-carousel-item>
                        <?php
                        $i;
                        for ($i = $j * 5; $i < ($j + 1) * 4 && $i < $numRows - 1; $i++) {

                            $ligne = $result[$i];
                            $id = $ligne["IDp"];
                            $Productprix = $ligne["Prixv"];
                            $Productcategory = $ligne["catégorie"];
                            $Productname = $ligne["Libellép"];
                            $Productimage = $ligne["Imagep"];

                            ?>
                            <div class="hidden md:inline-block">
                                <?php
                                include "../PRODUCTCARD/cardcontroller.php";
                                ?>
                            </div>
                            <?php
                        }

                        $ligne = $result[$i];
                        $id = $ligne["IDp"];
                        $Productprix = $ligne["Prixv"];
                        $Productcategory = $ligne["catégorie"];
                        $Productname = $ligne["Libellép"];
                        $Productimage = $ligne["Imagep"];
                        ?>
                        <div>
                            <?php
                            include "../PRODUCTCARD/cardcontroller.php";
                            ?>
                        </div>
                        <?php


                        ?>
                    </div>
                    <?php
                }
                ?>
                </div>

                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <?php
                for ($i = 0; $i < $numSlides; $i++) {
                    ?>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                        aria-label="Slide <?php echo $i + 1; ?>" data-carousel-slide-to="<?php echo $i; ?>"></button>
                    <?php
                }
                ?>
                </div>

                <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full sm:w-10 sm:h-10 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-5 h-5 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="hidden">Anterior</span>
                </span>
                </button>
                <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full sm:w-10 sm:h-10 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-5 h-5 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Siguiente</span>
                </span>
                </button>
                </div>

            <!--Categories Code Begin Here -> :-->

            <div class="relative w-full mt-10">
            <div class="carousel-container">
                <div class="flex slides-container">
                    <!-- Slides are duplicated for infinite effect -->
                    <?php
                    $result = $obj->getCategories();

                    foreach ($result as $ligne) { ?>
                        <div class="slide">

                            <?php
                            echo '<img class="object-cover w-40 h-40 mx-auto mb-1 rounded-full drop-shadow-2xl" src="data:image/jpeg;base64,' . base64_encode($ligne["img"]) . '" style="height: 160px; width: auto;" />';
                            ?>
                            <div class="text-lg font-bold drop-shadow-2xl"><?php echo $ligne["Libelléca"] ?> </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="w-10 bg-gray-200 rounded-full arrow left" onclick="moveSlider('prev')"><i
                    class="fa-solid fa-left-long"></i></div>
            <div class="w-10 bg-gray-200 rounded-full arrow right" onclick="moveSlider('next')"><i
                    class="fa-solid fa-right-long"></i></div>
            </div>

            <script>
            const slidesContainer = document.querySelector('.slides-container');
            let slideWidth = document.querySelector('.slide').offsetWidth;
            let currentSlide = 0;
            const totalSlides = slidesContainer.children.length;

            function moveSlider(direction) {
                if (direction === 'next') {
                    currentSlide = (currentSlide + 1) % (totalSlides - 3);
                } else {
                    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                }
                slidesContainer.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
            }

            document.addEventListener('keydown', (event) => {
                if (event.key === 'ArrowRight') {
                    moveSlider('next');
                } else if (event.key === 'ArrowLeft') {
                    moveSlider('prev');
                }
            });

            window.addEventListener('resize', () => {
                slideWidth = document.querySelector('.slide').offsetWidth;
                slidesContainer.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
            });
        </script>

        <!--Categories Code Ends Here -> :-->

        <div class="w-full mx-auto mt-10 rounded">
    <div id="default-carousel" class="relative" data-carousel="static">
        <div class="relative overflow-hidden carousel-height">
            <?php
            $result = $obj->getTopSellingProducts();
            $count = count($result);
            if ($count > 0) {
               ?>
                <!-- Affichage des produits pour les grands écrans -->
                <div class="flex items-center justify-center duration-700 ease-in-out">
                    <?php
                    foreach ($result as $ligne) {
                        $id = $ligne["IDp"];
                        $Productprix = $ligne["Prixv"];
                        $Productcategory = $ligne["catégorie"];
                        $Productname = $ligne["Libellép"];
                        $Productimage = $ligne["Imagep"];
                       ?>
                        <div class="hidden md:inline-block">
                            <?php include "../PRODUCTCARD/cardcontroller.php";?>
                        </div>
                        <?php
                    }
                   ?>
                </div>
                <?php
                // Affichage individuel des produits pour les petits écrans
                foreach ($result as $ligne) {
                    $id = $ligne["IDp"];
                    $Productprix = $ligne["Prixv"];
                    $Productcategory = $ligne["catégorie"];
                    $Productname = $ligne["Libellép"];
                    $Productimage = $ligne["Imagep"];
                   ?>
                    <div class="flex items-center justify-center duration-700 ease-in-out" data-carousel-item>
                        <div class="md:hidden">
                            <?php include "../PRODUCTCARD/cardcontroller.php";?>
                        </div>
                    </div>
                    <?php
                }
               ?>
                <!-- Boutons de navigation -->
                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none md:hidden" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full sm:w-10 sm:h-10 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-5 h-5 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="hidden">Anterior</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none md:hidden" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full sm:w-10 sm:h-10 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-5 h-5 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Siguiente</span>
                    </span>
                </button>
                <?php
            } else {
                echo "No products found.";
            }
            ?>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/beb14da2c9.js" crossorigin="anonymous"></script>

</body>

</html>
<?php include '../Footer/Footerview.php' ?>