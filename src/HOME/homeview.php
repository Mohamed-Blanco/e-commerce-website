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
<style>
    *{
        color:#333333 ;
    }
    @font-face{
    font-family:"helvetica";
    src:url("https://candyfonts.com/wp-data/2018/10/26/11538/HELR45W.ttf") format("woff"),
    url("https://candyfonts.com/wp-data/2018/10/26/11538/HELR45W.ttf") format("opentype"),
    url("https://candyfonts.com/wp-data/2018/10/26/11538/HELR45W.ttf") format("truetype");
}
</style>
<body >
        <?php include '../Carousel.php'?>   
        
        <div class="flex m-10 justify-between">
        
        <span class="shrink-0 px-6 font-[helvetica] font-bold">Deals of the Month : </span>
        <a href="http://" class ="  " ><button class=" rounded-full bg-black w-28 h-9 font-[helvetica] text-white">View All <i class="fa-solid fa-arrow-right text-white "> </i></button></a>
        
        
        </div>
        
        
</span>

</body>
</html>
<?php 
    include '../Footer/Footerview.php'
?>