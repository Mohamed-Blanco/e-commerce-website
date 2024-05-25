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
</head>
<body>
        <?php
include 'C:\xampp\htdocs\ProjectWebPharmacie\src\CONTACTUS\conta\contact.php';
?>
</body>
</html>
<?php
include '../Footer/Footerview.php';
?>