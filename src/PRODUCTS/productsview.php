

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="" style="background-color : white;">
    <div class="p-5 bg-green-100">
        <ul id="slidedown" class="flex-row">
            <li class="mt-5 mb-2 text-2xl text-center text-black text-bold">Shop</li>
            <li class="mb-5 text-center text-bold "><span>Home </span> <span class="text-black text-bold"><i
                        class="fa-solid fa-caret-right"></i> Shop</span></li>
        </ul>
    </div>
    <div class="flex flex-col items-center justify-center md:flex-row md:items-start">
        
        <div >
            <?php include '../PRODUCTS/navigation/navigation.php'; ?>
        </div>
        <div>
            <?php include '../PRODUCTS/productsgrid/gridview.php'; ?>
        </div>
    </div>
</body>

</html>
