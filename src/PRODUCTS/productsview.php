<?php
include '../NAVBAR/navbarview.php'
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="" style="background-color : white;">
    <div class="bg-green-100 p-5">
        <ul id="slidedown" class="flex-row">
            <li class="text-2xl text-center text-black text-bold mt-5 mb-2">Shop</li>
            <li class="mb-5 text-center text-bold "><span>Home </span> <span class="text-black text-bold"><i
                        class="fa-solid fa-caret-right"></i> Shop</span></li>
        </ul>
    </div>
    <div class="flex flex-col md:flex-row justify-center  md:items-start items-center">
        
        <div >
            <?php include '../PRODUCTS/navigation/navigation.php'; ?>
        </div>
        <div>
            <?php include '../PRODUCTS/productsgrid/gridview.php'; ?>
        </div>
    </div>
</body>

</html>

<?php
include '../Footer/Footerview.php';

?>