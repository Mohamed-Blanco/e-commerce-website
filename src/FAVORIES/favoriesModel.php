<?php
class UserModel {
    private $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=pharmacie", "root", "");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public function get_favorite(array $favs) : string {

        $all='
<div class="container mx-auto mb-14">
        <h1 class="text-2xl font-bold mb-6">Favories</h1>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Libellé</th>
                    <th class="py-2 px-4 border-b">Prix</th>
                    <th class="py-2 px-4 border-b">Date perimé</th>
                    <th class="py-2 px-4 border-b">Quantite</th>
                    <th class="py-2 px-4 border-b">Catégorie</th>

                    </tr>
            </thead>
            <tbody>

';
        

        foreach ($favs as $fav) {

            $sql = 'select pr.Idp as a, pr.Libellép as b, pr.Prixv as c, pr.Datepp as d,pr.Qte as e,cat.Libelléca as f from produit pr JOIN catégorie cat on cat.IDcat=pr.IDcat where pr.Libellép=:x ;';
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':x', $fav);


            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


            if ($result) {
                foreach ($result as $row) {


                    $all.= "<tr>";
                    $all.= "<td class='py-2 px-4 border-b text-center'>{$row["a"]}</td>";
                    $all.= "<td class='py-2 px-4 border-b text-center'>{$row["b"]}</td>";
                    $all.= "<td class='py-2 px-4 border-b text-center'>{$row["c"]}</td>";
                    $all.= "<td class='py-2 px-4 border-b text-center'>{$row["d"]}</td>";
                    $all.= "<td class='py-2 px-4 border-b text-center'>{$row["e"]}</td>";
                    $all.= "<td class='py-2 px-4 border-b text-center'>{$row["f"]}</td>";


                    $all.= "</tr>";





                }
            } else {
                $all .= "none<br>";  
            }
            

        }
        $all.= '
                </tbody>
                </table>
                </div>';

        
        return $all;
    }
}
?>
