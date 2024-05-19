<?php 
    include '../NAVBAR/navbarview.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Radio+Canada+Big:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    *{
        color:#333333 ;
    }
    
    .poppins {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}
</style>
<body >
        <?php include 'Carousel1.php'?>   
        
        <div class="flex m-10 justify-between">
        
        <span class="shrink-0 px-6 poppins font-bold text-2xl">Nouveaux produits du mois : </span>
        <a href="http://" class ="  " ><button class=" rounded-full bg-black w-28 h-9 poppins text-white">Voir Tout <i class="text-white fa-solid fa-arrow-right  "> </i></button></a>
        
        
        </div>
        
        
</span>

</body>
</html>
<?php 
    include '../Footer/Footerview.php'
?>