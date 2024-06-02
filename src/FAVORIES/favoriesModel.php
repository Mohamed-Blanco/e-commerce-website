<?php

include '../PDOModel.php';



class FavModel {
    private $db;

    public function __construct() {
        $x=new PDOModel();
        $con=$x->getconection();
        $this->db = $con;
    }
    
    public function get_favorite(array $favs) : string {

        $all='
<div class="container mx-auto mb-14">
        
        <div class="container w-full  mx-auto px-4 mt-10 flex flex-col sm:flex-col md:flex-row justify-between">
        <table class="w-full md:w-4/5 text-left shadow-lg rounded-lg table-mobile"">
            <thead class="h-32">
                <tr class="text-xs text-center text-gray-500 bg-gray-50 uppercase border-b">
                    <th class="py-2 px-4">Image</th> 
                    <th class="py-2 px-4">ID</th>
                    <th class="py-2 px-4">Libellé</th>
                    <th class="py-2 px-4">Prix</th>
                    <th class="py-2 px-4">Date perimé</th>
                    <th class="py-2 px-4">Quantite</th>
                    <th class="py-2 px-4">Catégorie</th>
                    <th class="py-2 px-4">Action</th>


                    </tr>
            </thead>
            <tbody class="h-28">

';
        

        foreach ($favs as $fav) {

            $sql = 'select pr.Imagep as w,pr.Idp as a, pr.Libellép as b, pr.Prixv as c, pr.Datepp as d,pr.Qte as e,cat.Libelléca as f from produit pr JOIN catégorie cat on cat.IDcat=pr.IDcat where pr.Libellép=:x ;';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':x', $fav);


            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


            if ($result) {
                foreach ($result as $row) {
                    $imageData = base64_encode($row["w"]);
                    // Create the image source string
                    $imageSrc = 'data:image/jpeg;base64,' . $imageData;


                    $all.= "<tr class='text-gray-700 text-center mb-[50px]'>";
                    $all.="<td class='px-4 py-3 text-sm' data-label='Image:'>
                    <img src='{$imageSrc}' alt='Image' class='h-16 w-16 object-cover mx-auto rounded-full' />
                    </td>";
                    $all.= "<td class='px-4 py-3 text-sm' data-label='ID'>{$row["a"]}</td>";
                    $all.= "<td class='px-4 py-3 text-sm' data-label='Libellé'>{$row["b"]}</td>";
                    $all.= "<td class='px-4 py-3 text-sm' data-label='Prix'>{$row["c"]}</td>";
                    $all.= "<td class='px-4 py-3 text-sm' data-label='Date perimé'>{$row["d"]}</td>";
                    $all.= "<td class='px-4 py-3 text-sm' data-label='Quantite'>{$row["e"]}</td>";
                    $all.= "<td class='px-4 py-3 text-sm' data-label='Catégorie'>{$row["f"]}</td>";
                    $all.="<td class='px-4 py-3 text-sm' data-label='Action'>";
                    $all.="<button class='bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded' onclick=\"supprimer('{$row["b"]}')\">Delete</button>";
                    $all.="</td>";

                    $all.= "</tr>";

                }
            } else {
                $all .= "<br>";  
            }
            

        }
        $all.= '
                </tbody>
                </table>
                </div>

                </div>';

        
        return $all;
    }
}
?>
