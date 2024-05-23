<?php 
    include '../NAVBAR/navbarview.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../output.css" rel="stylesheet">


</head>
<body class="flex items-center">

    <div class="mx-auto bg-[rgb(234,245,249)] p-4 rounded-tr-3xl rounded-bl-3xl rounded-br-3xl h-[500px] mt-[100px] mb-[100px] xl:w-[600px] sm:w-[450px] w-[440px]">
        <form method="post" action="signController.php">
        <p class="font-bold text-center mt-[40px] mb-[20px]  text-[rgb(21,12,107)] text-3xl">Connectez-vous a votre compte</p>
        <div class="h-[1px] bg-[rgb(210,220,224)] w-[500px] mx-auto"></div>

        <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Email</p>
        <input name="email" type="text" class="rounded-xl h-[40px] ml-[35px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px]">

        <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Mot de passe</p>
        <input name="password" type="password" class="rounded-xl h-[40px] ml-[35px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px]">

        <div class="text-right">

        <button type="submit" 
        class="bg-[rgb(39,197,143)] text-white h-[47px] w-[140px] rounded-tl-3xl rounded-br-3xl rounded-bl-3xl mt-[20px] mr-[30px] text-lg">
        Connexion</button>
    </div>
        
    </form>
    <div class="flex justify-center">

    <button class="w-[500px] border-[2px] rounded-3xl border-[rgb(36,134,199)] h-[40px] text-[rgb(36,134,199)] mt-[20px]" onclick="signup()">Pas de compte ? Créez-en un</button>

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
    include '../Footer/Footerview.php'
?>