<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Radio+Canada+Big:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

</head>
<style type="text/css">


</style>
<style>
    .circle {
        width: 16px;
        height: 16px;
        border-radius: 50%; /* This makes the element circular */
        background-color: #17A841   ; /* Adjust color as needed */
    }
    .poppins- {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}
</style>
<body class=" poppins">
        <nav style = " background-color : #6dd089  ; " class="hidden    pl-10 pr-5 p-2  md:items-center jus md:flex md:justify-between" >
            <p class ="pl-5 hover:text-green-500 duration-500"  >En raison de l'épidémie de COVID-19, les commandes peuvent être traitées avec un léger retard.

Recommandez </p>
            <div class="pr-5 "><a href="" class="mr-5 hover:text-cyan-500 duration-500"><i class="fa-regular fa-user hover:text-cyan-500 duration-500"></i> Login / Register</a><a href="" class=" hover:text-cyan-500 duration-500"><i class="hover:text-cyan-500 duration-500 mr-5 fa-solid fa-heart"></i>Favories </a></div>
            
        </nav>
        <nav class="ml-8 md:pl-5 pr-5 p-2 bg-white  md:flex md:items-center  justify-between" >
            
            <div class="flex justify-between ">
                <img src="../images/LogoPharma.png" class="h-16 inline mr-10" ></img>
                
                <span class=" md:hidden self-center pr-5">
                <i id="menu" name="Menu" onclick="Menu(this)" class="text-xl fa-solid fa-bars "></i>
                </span>
            </div>


            <ul  id="slidedown" name ="Menu" class = " md:flex md:static  z-[-1] md:z-auto " style="font-size:1.08rem;">
                <li class="mx-8">
                    <a href="#" class=" text-black hover:text-cyan-500 duration-500 " ><i class="fa-solid fa-house mr-2 md:opacity-0 opacity-100"></i>Home</a>
                </li>
                <li class="mx-8">
                    <a href="#" class=" text-black hover:text-cyan-500 duration-500 " ><i class="fa-brands fa-product-hunt mr-2 md:opacity-0 opacity-100 "></i> Produits</a>
                </li>
                <li class="mx-8">
                    <a href="#" class=" text-black hover:text-cyan-500 duration-500 " ><i class="fa-solid fa-question mr-5 md:opacity-0 opacity-100"></i>About Us</a>
                </li>
                <li class="mx-8">
                    <a href="#" class=" text-black hover:text-cyan-500 duration-500 " ><i class="fa-solid fa-phone mr-2 md:opacity-0 opacity-100"></i>Contact Us</a>
                </li>
                <li class="mx-8 md:hidden ">
                <a href="#" class=" text-black hover:text-cyan-500 duration-500 " ><i class="fa-solid fa-phone mr-2 md:opacity-0 opacity-100"></i>Panier</a>

                </li>
            </ul>
            
            <a id="panier" href="#" class="  mr-10 ml-10 hidden md:flex text-black hover:text-cyan-500 duration-500 " ><i style="font-size:1.4rem; margin-top: 7px;"class=" hover:text-cyan-500 duration-500 md:opacity-100 opacity-0 fa-solid fa-cart-shopping"></i><div style="margin-left:-7px; font-size:0.9rem;background-color:#17A841;" class="hover:text-cyan-500 duration-500  md:opacity-100 opacity-0  text-white flex justify-center items-center  border circle"><p class ="text-white font-[helvetica]">0</p></div></a>
            
        </nav>
        

        <script src="https://kit.fontawesome.com/beb14da2c9.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
         let i = 180;
         $('#menu').on('click', function (){
            
             $("#slidedown").slideToggle(500);
             
             
         });   
function Menu(e) {
    /*let list = document.querySelector('ul');
    
      
    

   */
}
</script>

<script src="https://kit.fontawesome.com/beb14da2c9.js" crossorigin="anonymous"></script>
</body>
</html>