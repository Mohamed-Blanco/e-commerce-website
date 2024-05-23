<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="output.css" rel="stylesheet">
</head>
<body >
    <div class=" w-auto grid md:grid-rows-2  grid-rows-3 grid-flow-col ">
        <?php 
        for($i=0;$i<6;$i++){
            ?>
            <div class="my-2">
                <?php
        include '../Productcard.html' ;
                 ?>
             </div>
             <?php
        }
        ?>
        
      </div>
      
</body>
</html>