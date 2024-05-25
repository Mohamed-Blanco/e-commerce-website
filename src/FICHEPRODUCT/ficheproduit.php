<?php
include '../NAVBAR/navbarview.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .poppins {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body style="background-color:white ;"  >

    <div style="width: 100%;" class="bdy bg-white w-100  md:flex flex-row  p-12 ">
        <div class="bg-white flex-row justify-center md:w-100 md:w-2/5 mr-12">
            <div>
            <img  class="rounded-lg border-gray-200 border-2 hover:border-gray-500" src="https://enovathemes.com/propharm/wp-content/uploads/product62.jpg" alt="">
            </div>
            <div class="flex my-5 gap-8">
            <img class="rounded-lg w-24 hover:border-gray-500 border-gray-200 border-2" src="https://enovathemes.com/propharm/wp-content/uploads/product62.jpg" alt="">
            <img class="rounded-lg w-24 hover:border-gray-500 border-gray-200 border-2" src="https://enovathemes.com/propharm/wp-content/uploads/product62.jpg" alt="">
            </div>
            
        </div>
        <hr class="my-5" >
        <div class="">
            <ul class="flex-row gap-2 text-black">
                <li class="text-3xl">Product Name</li>
                <li class="my-5">
                    <hr>
                </li>
                <li class="text-xl">SVR TOPIALYSE BAUME EN SPRAY PEAUX TRÈS SÈCHES À ATOPIQUE 200ML</li>
                <li class="my-5">
                    <hr>
                </li>
                <li class="text-4xl">161 DH</li>
                <li class="flex">
                    <p class="">EN STOCK </p>
                    <div class="mx-3 w-3 h-3 bg-green-500  rounded-full items-center self-center"></div>
                    <hr>
                </li>
                <li class="m:px-16 py-8 flex">





                    <input type="number" value="0" class=" mr-5 self-center w-10  mt-[20px] md:mr-12 bg-white border-2 border-[rgb(21,12,107)] rounded-lg flex justify-center items-center h-10">
                    <button
                        class="bg-[rgb(39,197,143)] text-white  rounded-tl-3xl rounded-br-3xl rounded-bl-3xl mt-[20px] md:mr-[50px] text-lg mx-auto  w-2/3 h-12 flex justify-center items-center gap-5">j'Achete
                        <i class="fa-solid fa-cart-shopping"></i></button>
                    <button
                        class="bg-[rgb(21,12,107)] text-white  rounded-tl-3xl rounded-br-3xl  mt-[20px] md:mr-[30px]  ml-5 mx-auto  w-1/5 h-12 p-2 flex items-center gap-2">Favoriser
                        <i class="fa-solid fa-heart"></i></button>

                </li>
                <li class="" >
                    <hr>
                    <ul class="my-5 flex justify-between">
                        <li class="text-sm">PAIEMENT SÉCURISÉ PAR LE CMI</li>
                        <li class=""><img src="../images/Visa.png" alt=""></li>
                    </ul>
                    <hr>
                </li>
            </ul>
            
        </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
       
    </body>

</html>

<?php
include '../Footer/Footerview.php';
?>

