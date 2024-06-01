<?php
include '../NAVBAR/navbarview.php';

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
</style>

<body>
    <?php include 'Carousel1.php' ?>

    <div class="m-10 md:flex md:justify-between">
        <span class="px-6 text-2xl font-bold shrink-0 poppins">Nouveaux produits du mois : </span>
        <a href="http://" class=""><button
                class="m-5 text-white bg-black rounded-full md:m-0 w-28 h-9 poppins pulse">Voir Tout <i
                    class="text-white fa-solid fa-arrow-right "> </i></button></a>
    </div>

    <?php include 'Carousel2.php' ?>
    <div class="flex-row justify-center gap-16 mt-8 mb-8 md:flex ">
            <?php include 'Shopnow.html' ?>
            <?php include 'Shopnow2.html' ?>
    </div>

    <div>
    <?php include 'slider.php' ?>
    </div>
    <div class="m-10 md:flex md:justify-between">
        <span class="px-6 text-2xl font-bold shrink-0 poppins">les Produits les plus vendues : </span>
        <a href="http://" class=""><button
                class="m-5 text-white bg-black rounded-full md:m-0 w-28 h-9 poppins pulse">Voir Tout <i
                    class="text-white fa-solid fa-arrow-right "> </i></button></a>
    </div>

    <div class=""><?php include 'Produitsplus.php' ?></div>

    
</body>

</html>
<?php
include '../Footer/Footerview.php'
    ?>