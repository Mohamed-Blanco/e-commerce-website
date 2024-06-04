<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="../output.css" rel="stylesheet">
</head>
<style>
  .add {
    background-color: #17A841;
  }

 
    .transition-visibility {
        transition: visibility 0s linear 1000ms, opacity 1000ms linear;
    }

</style>

<body class="bg-white" style="background-color: white;">
    

<form action="../PRODUCTCARD/cardcontroller.php" method="get">
  <div style="margin-left: 10px; margin-right: 10px;" class=" group p-8 mx-16 bg-white w-56 h-82 border-2">
  

    <div class="">
      <button  type="submit" name="action" value="favoriser" style="margin-left: 142px;margin-top: 30px; position: absolute;"><i class="hover:text-2xl  hover:text-red-500 opacity-0 group-hover:opacity-100 duration-400 transition-all fa-regular fa-heart"></i></button>
      <button type="submit" name="action" value="panier" style="margin-left: 142px;  position: absolute;"><i class="opacity-0 hover:text-2xl  hover:text-black group-hover:opacity-100  ease-out duration-300 fa-solid fa-plus"></i></button>
      
    
      <?php  
    echo '<img src="data:image/jpeg;base64,' . base64_encode($Productimage) . '" style="height: 160px; width: auto;" />';
      ?>

    </div>
    <div class="group">
      
      <ul>
        <li  class=" pt-5 h-24 text-xl text-black font-bold">
         <?php echo $Productname?>
         <input type="hidden" value="<?php echo $Productname?>" name="Productname" id="">
        </li>
        <li class=" text-1xl"><?php echo $Productcategory?></li>
      </ul>
    </div>
    <div>
      <ul class="pt-5  flex justify-between ">
        <li class="group-hover:hidden group-hover:justify-end md:flex self-center text-black text-bold duration-1000 transition-all">
          <ul>
            <li><?php echo $Productprix?>dh</li>
            <li class="text-sm ">20% TVA inclus</li>
          </ul>
        </li>
  </form>
  <form action="../FICHEPRODUCT/ficheController.php" method="get">
        <li>
          <button type="submit" name="action" value="acheter"
            class="group-hover:w-40 flex items-center group-hover:px-2  duration-100 justify-center w-10 h-10 bg-green-400 group-hover:bg-green-500 transition-all rounded-full group-hover:duration-1000">
            <textarea name="Productname" class="hidden" ><?php echo $Productname?></textarea>
            <p class="text-white group-hover:flex hidden text-sm transition-transform " > <span class="group-hover:opacity-100 text-white transition-all ">Acheter </span></p>
            <i class="  group-hover:mx-2 text-white fa-solid fa-basket-shopping"></i>
          </button>
        </li>
      </ul>
    </div>
    </form>
    
  </div>
  </form>


  <script src="https://kit.fontawesome.com/beb14da2c9.js" crossorigin="anonymous"></script>

</body>

</html>