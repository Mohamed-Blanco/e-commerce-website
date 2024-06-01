<?php
//session_start();



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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
@media (max-width: 768px) {
    /* Configurer le tableau pour utiliser CSS Grid */
    .table-mobile tbody tr {
        display: grid;
        
        gap: 10px; /* Espace entre les colonnes */
    }

    /* Mettre chaque cellule en mode bloc pour alignement vertical */
    .table-mobile th, .table-mobile td {
        display: block;
        width: 100%;
    }

    /* Placer les labels des en-têtes de manière explicite à gauche */
    .table-mobile td:before {
        content: attr(data-label); /* Ajoute le label avant le contenu de la cellule */
        font-weight: bold; /* Rend le label en gras */
        float: left; /* Place le label à gauche */
        margin-right: 18px; /* Espace entre le label et le contenu */
        grid-column: 1; /* Place tous les labels dans la première colonne */
    }

    /* Assurer que les données remplissent la seconde colonne */
    .table-mobile td {
        grid-column: 2 /* Place les données dans la deuxième colonne */
    }

    /* Style pour améliorer la visibilité des en-têtes sur petits écrans */
    .table-mobile thead {
        display: none; /* Masquer l'en-tête traditionnelle */
    }


}

</style>

    <style>
        .poppins {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body style="background-color:white;">

    <div class="bg-green-100 p-5">
        <ul id="slidedown" class="flex-rew">
            <li class="text-2xl text-center text-black text-bold mt-5 mb-2">Favories</li>
            <li class="mb-5 text-center text-bold "><span>Menu </span> <span class="text-black text-bold"><i
                        class="fa-solid fa-caret-right"></i> Favories</span></li>
        </ul>
    </div>
    <div>

<?php

echo $_SESSION["contenues"];



?>

<script>


    let $favories = <?= json_encode($_SESSION["favories"]) ?>;

    console.log($favories);

    function supprimer(x) {
        let index=$favories.indexOf(x);

        const currentUrl = window.location.href;

        const url = new URL(currentUrl);
        url.searchParams.set('delete', index);
        window.location.href = url.toString();



       
    }
</script>

    </div>

</body>

</html>



