<?php 
    include '../NAVBAR/navbarview.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../output.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    .poppins {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
</style>
<body style=" background-color: white;"class="poppins flex items-center">
<div class="bg-green-100 p-5">
        <ul id="slidedown" class="flex-rew">
            <li class="text-2xl text-center text-black text-bold mt-5 mb-2">Sign Up</li>
            <li class="mb-5 text-center text-bold "><span>Home </span> <span class="text-black text-bold"><i
                        class="fa-solid fa-caret-right"></i> Sign up</span></li>
        </ul>
    </div>
    <div class="flex justify-center flex-col items-center mx-auto bg-[rgb(234,245,249)] p-4 rounded-tr-3xl rounded-bl-3xl rounded-br-3xl h-[1060px] mt-[100px] mb-[140px] xl:w-[600px] sm:w-[450px] w-[440px]">
        
        
            <p class="font-bold text-center mt-[40px] mb-[20px] text-[rgb(21,12,107)] text-3xl">Créez votre compte</p>
            <div class="flex justify-center items-center ">
                <button class="xl:w-[500px] sm:w-[360px] hover:bg-[rgb(80,72,153)] w-[340px] border-[2px] rounded-3xl border-[rgb(36,134,199)] h-[40px]  text-[rgb(36,134,199)] mt-[20px]" onclick="signup()">
                    Vous avez déjà un compte ? Connectez-vous !
                </button>
            </div>
            <form method="post" action="signController.php">

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Prenom</p>
                <input name="prenom" type="text" class="rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto">
            </div>

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Nom</p>
                <input name="nom" type="text" class="rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto">
            </div>

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Email</p>
                <input name="nemail" type="text" class="rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto">
            </div>

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Mot de passe</p>
                <input name="npassword" type="password" class="rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto">
            </div>

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Date de naissance</p>
                <div class="flex flex-col mt-[15px] w-[300px] sm:w-[360px] xl:w-[500px] mx-auto">
                    <select id="year" name="year" class="h-[40px] mb-[10px] mr-[10px] flex-grow">
                        <option value="">Select Year</option>
                    </select>

                    <select id="month" name="month" class="h-[40px] mb-[10px] mr-[10px] flex-grow">
                        <option value="">Select Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>

                    <select id="day" name="day" class="h-[40px] mb-[10px] mr-[10px] flex-grow">
                        <option value="">Select Day</option>
                    </select>
                </div>
            </div>

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">Télephone</p>
                <input name="tele" type="text" class="rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto">
            </div>

            <div class="flex justify-center flex-col">
                <p class="text-[rgb(21,12,107)] mt-[20px] font-bold ml-[35px]">CIN</p>
                <input name="cin" type="text" class="rounded-3xl h-[45px] mt-[15px] xl:w-[500px] sm:w-[360px] w-[300px] mx-auto">
            </div>

            <div class="text-right">
                <button type="submit" class="bg-[rgb(39,197,143)] text-white h-[47px] w-[140px] rounded-tl-3xl rounded-br-3xl rounded-bl-3xl mt-[20px] mr-[30px] text-lg mx-auto">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>

    <script>

        function signup() {
            window.location.href = "login.php";

        }
        var yearSelect = document.getElementById("year");
        var currentYear = new Date().getFullYear();
        for (var i = currentYear; i >= currentYear - 100; i--) {
            var option = document.createElement("option");
            option.value = i;
            option.textContent = i;
            yearSelect.appendChild(option);
        }

        var monthSelect = document.getElementById("month");
        var daySelect = document.getElementById("day");

        function populateDays() {
            var selectedMonth = monthSelect.value;
            var selectedYear = yearSelect.value;
            daySelect.innerHTML = "<option value=''>Select Day</option>";
            if (selectedMonth === "" || selectedYear === "") return;

            var daysInMonth = new Date(selectedYear, selectedMonth, 0).getDate();
            for (var i = 1; i <= daysInMonth; i++) {
                var option = document.createElement("option");
                option.value = i;
                option.textContent = i;
                daySelect.appendChild(option);
            }
        }

        monthSelect.addEventListener("change", populateDays);
        yearSelect.addEventListener("change", populateDays);
    </script>
</body>
</html>

<?php 
    include '../Footer/Footerview.php';
?>
