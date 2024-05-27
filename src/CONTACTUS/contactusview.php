<?php 
session_start();
    include '../NAVBAR/navbarview.php';
    if(isset($_SESSION["nom"])){
        echo "<script>alert('email has been sended ')</script>";
        unset($_SESSION["nom"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<style>
    .circle {
        width: 16px;
        height: 16px;
        border-radius: 50%; /* This makes the element circular */
        background-color: #17A841   ; /* Adjust color as needed */
    }
    .poppins{
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}


</style>
<body style="background-color:white;" class="poppins">
        <?php
include 'C:\xampp\htdocs\ProjectWebPharmacie\src\CONTACTUS\conta\contact.php';
?>
</body>
</html>
<?php
include '../Footer/Footerview.php';
?>