

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <link href="../output.css" rel="stylesheet">
    <style>
        .add {
            background-color: #17A841;
        }

        .transition-visibility {
            transition: visibility 0s linear 1000ms, opacity 1000ms linear;
        }
    </style>
</head>

<body class="bg-white" style="background-color: white;">

    <?php foreach ($products as $product): ?>
    <div style="margin-left: 10px; margin-right: 10px;" class="w-56 p-8 mx-16 bg-white border-2 group h-82">
        <div>
            <?php
            if ($product['Imagep']) {
                echo '<img src="data:image/png;base64,'.base64_encode($product['Imagep']).'" alt="'.$product['Libellép'].'">';
            } else {
                echo "No image found.";
            }
            ?>
        </div>
        <div class="group">
            <ul>
                <li class="pt-5 text-xl font-bold text-black "><?= $product['Libellép'] ?></li>
                <li class=" text-1xl"><?= $product['catégorie'] ?></li>
            </ul>
        </div>
        <div>
            <ul class="flex justify-between pt-5 ">
                <li class="self-center text-black transition-all duration-1000 group-hover:hidden group-hover:justify-end md:flex text-bold">
                    <ul>
                        <li><?= $product['Prixv'] ?> dh</li>
                        <li class="text-sm ">20% TVA inclus</li>
                    </ul>
                </li>
                <li>
                <a href="../FICHEPRODUCT/ficheproduit.php?id=<?= $product['IDp'] ?>" class="flex items-center justify-center w-10 h-10 transition-all duration-100 bg-green-400 rounded-full group-hover:w-40 group-hover:px-2 group-hover:bg-green-500 group-hover:duration-1000">
                        <p class="hidden text-sm text-white transition-transform group-hover:flex"> <span class="text-white transition-all group-hover:opacity-100">Acheter</span></p>
                        <i class="text-white group-hover:mx-2 fa-solid fa-basket-shopping"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <?php endforeach; ?>

    <script src="https://kit.fontawesome.com/beb14da2c9.js" crossorigin="anonymous"></script>

</body>

</html>
