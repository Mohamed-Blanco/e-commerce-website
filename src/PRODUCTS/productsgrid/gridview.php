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
    // Establishing connection
    try {
        $conn = new PDO('mysql:host=localhost;port=3308;dbname=pharmacie', 'root', '');
        

        // Query to fetch products
        $query = "SELECT IDp, Prixv, IDcat, Libellép , Imagep FROM produit";
        $result = $conn->query($query);

        // Fetching all rows
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($data as $ligne) {
            
            $id = $ligne["IDp"];
            $Productprix = $ligne["Prixv"];
            $Productcategory = $ligne["IDcat"];
            $Productname = $ligne["Libellép"];
            $Productimage = $ligne["Imagep"];
            
            ?>
            <div class="my-2">
                <?php include '../PRODUCTCARD/cardcontroller.php'; ?>
            </div>
            <?php
        }
    } catch (PDOException $e) {
        
        echo $e->getMessage();
    }
    ?>
      </div>
      
</body>
</html>