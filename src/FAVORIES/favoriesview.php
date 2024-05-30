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

<?php
   include '../Footer/Footerview.php';
?>

