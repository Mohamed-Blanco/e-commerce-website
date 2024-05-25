<?php 
session_start();
    include '../NAVBAR/navbarview.php';

    

    $email="";
    $password="";

    if(isset($_GET["try"])){
        if($_GET["try"]==2){
            $email=$_SESSION["email"];
            $password=$_SESSION["password"];
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.tailwindcss.com"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> .poppins {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}
</style>
    <title>Login</title>

    <link href="../output.css" rel="stylesheet">
</head>
<body class="poppins  flex items-center justify-center" style="background-color:white">

    <div class="flex items-center justify-center flex-col mx-auto bg-[rgb(234,245,249)] p-4 rounded-tr-3xl rounded-bl-3xl rounded-br-3xl h-[500px] mt-[100px] mb-[100px] xl:w-[600px] sm:w-[450px] w-[440px]">
        <form method="post" action="signController.php" class="flex flex-col items-center w-full">
            <p class="font-bold text-center mt-[40px] mb-[20px]  text-[rgb(21,12,107)] text-3xl">Connectez-vous a votre compte</p>
            <div class="h-[1px] bg-[rgb(210,220,224)] w-[500px] mx-auto"></div>

            <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px] self-start">Email</p>
            <input value="<?=$email?>" name="email" type="email" class="bg-white text-black rounded-3xl h-[40px] px-[10px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px]" required>

            <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px] self-start">Mot de passe</p>
            <input value="<?=$password?>" name="password" type="password" class=" bg-white text-black rounded-3xl h-[40px] px-[10px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px]" required>

            <?php
            if(isset($_GET["try"])){
                if($_GET["try"]==2){
                    echo '<p class="text-[rgb(255,0,0)] mt-[20px] font-bold ml-[35px]">Wrong Email or Password</p>';

                }
            }else if(isset($_GET["insert"])){
                echo '<p class="text-[rgb(21,12,107)] mt-[20px] font-bold">Your Account is Ready</p>';
            }
            ?>
            <div class="text-right self-end">
                <button type="submit" class="bg-[rgb(39,197,143)] text-white  h-[47px] w-[140px] rounded-tl-3xl rounded-br-3xl rounded-bl-3xl mt-[20px] mr-[30px] text-lg">Connexion</button>
            </div>
        </form>
        <div class="flex justify-center">
            <button type="button" class="hover:bg-[rgb(80,72,153)] border-[2px] rounded-3xl border-[rgb(36,134,199)] h-[40px] text-[rgb(36,134,199)] mt-[20px] xl:w-[500px] sm:w-[360px] w-[300px] " onclick="signup()">Pas de compte ? Créez-en un</button>
        </div>
    </div>

    <script>
        function signup() {
            window.location.href = "signup.php";
        }
    </script>
    
</body>
</html>

<?php 
    include '../Footer/Footerview.php';
?>
