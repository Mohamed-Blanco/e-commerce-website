<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="output.css" rel="stylesheet">
</head>
<body >
    <div class="p-7 pl-0 w-auto grid md:grid-rows-3 grid-cols-1 md:grid-cols-subgrid  md:grid-flow-col ">
        <?php 
        for($i=0;$i<12;$i++){
            ?>
            <div class="my-2">
                <?php
        include '../HOME/Productcard.html' ;
                 ?>
             </div>
             <?php
        }
        ?>
        
      </div>
      
</body>
</html>