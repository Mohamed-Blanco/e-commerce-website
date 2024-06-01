<?php
include '../NAVBAR/navbarcontroller.php';
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

<body style="background-color:white ;">

    <div class="bg-green-100 p-5">
        <ul id="slidedown" class="flex-rew">
            <li class="text-2xl text-center text-black text-bold mt-5 mb-2">Produit</li>
            <li class="mb-5 text-center text-bold "><span>Liste des Produits </span> <span
                    class="text-black text-bold"><i class="fa-solid fa-caret-right"></i> Produit</span></li>
        </ul>
    </div>
    <div style="width: 100%;" class="bdy bg-white justify-center md:flex flex-row  p-12 ">
        <div class="bg-white flex-row justify-center w-full md:w-2/5 mr-12">
            <div>
                <?php
                echo '<img  class="rounded-lg border-gray-200 border-2 hover:border-gray-500" src="data:image/jpeg;base64,' . base64_encode($Productimage) . '" style="height: 450px; width: auto;" />';
                ?>


            </div>
            <div class="flex my-5 gap-8">

                <?php
                echo '<img  class="rounded-lg w-24 hover:border-gray-500 border-gray-200 border-2" src="data:image/jpeg;base64,' . base64_encode($Productimage) . '"style="height: 100px; width: auto;" />';
                ?>
                <?php
                echo '<img   class="rounded-lg w-24 hover:border-gray-500 border-gray-200 border-2" src="data:image/jpeg;base64,' . base64_encode($Productimage) . '" style="height: 100px; width: auto;" />';
                ?>

            </div>

        </div>
        <hr class="my-5">
        <div class="md:w-1/2">
            <ul class="flex-row gap-2 text-black">
                <li class="text-3xl"><?php echo $productname ?></li>
                <li class="my-5">
                    <hr>
                </li>
                <li class="text-xl">SVR TOPIALYSE BAUME EN SPRAY PEAUX TRÈS SÈCHES À ATOPIQUE 200ML</li>
                <li class="my-5">
                    <hr>
                </li>

                <form action="ficheController.php" method="get">

                    <li class="text-4xl"><?php echo $Productprix ?> DH</li>
                    <li class="flex">
                        <p class="">
                            <?php
                            if ($ProductQte >= 0) {
                                echo "EN STOCK";
                                ?>
                            <div class="mx-3 w-3 h-3 bg-green-500  rounded-full items-center self-center"></div>
                            <?php
                            } else {
                                echo "OUT OF STOCK";
                                ?>
                            <div class="mx-3 w-3 h-3 bg-red-500  rounded-full items-center self-center"></div>
                            <?php
                            }
                            ?>
                        </p>

                        <p class="text-gray-400"><?php echo 'Quantité Actual ' . $ProductQte ?></p>
                        <hr>
                    </li>
                    <li class="m:px-16 py-12 flex">
                        <input type="number" value="0"
                            class=" mr-5 self-center w-10  mt-[20px] md:mr-12 bg-white border-2 border-[rgb(21,12,107)] rounded-lg flex justify-center items-center h-10">
                        <button
                            class="bg-[rgb(39,197,143)] text-white  rounded-tl-3xl rounded-br-3xl rounded-bl-3xl mt-[20px] md:mr-[50px] text-lg mx-auto  w-2/3 h-12 flex justify-center items-center gap-5">j'Achete
                            Maintenant
                            <i class="fa-solid fa-cart-shopping"></i></button>
                        <button type="submit" name="action" value="favoriser" class="bg-[rgb(21,12,107)] text-white  rounded-tl-3xl rounded-br-3xl  mt-[20px] md:mr-[30px]  ml-5 mx-auto  w-1/5 h-12 p-2 flex items-center gap-2">
                            Favoriser<i class="fa-solid fa-heart"></i></button>
                            <textarea name="product" class="hidden"><?php echo $productname ?></textarea>
                    </li>
                </form>
                <li class="">
                    <hr>
                    <ul class="my-5 flex justify-between">
                        <li class="text-sm">PAIEMENT SÉCURISÉ PAR LE CMI</li>
                        <li class=""><img src="../images/Visa.png" alt=""></li>
                    </ul>
                    <hr>
                </li>
                <li class="py-6">
                    <ul>
                        <li class="font-bold">CONSEILS D'UTILISATION :</li>
                        <p class="p-2 text-gray-600 text-sm">Nettoyer préalablement la peau avec TOPIALYSE Baume Lavant.
                            Vaporiser à 15cm de la peau SVR TOPIALYSE Baume en Spray Peaux Très Sèches à Atopique avant
                            d'étaler en insistant sur les zones très sèches et irritées.
                            NB : Pour une utilisation sur le visage, pulveriser au creux des mains.</p>
                    </ul>
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