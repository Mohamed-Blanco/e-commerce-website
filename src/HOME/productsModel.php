<?php
class Product {
    private $conn;
    private $table_name = "produit";

    public $IDp;
    public $Libellép;
    public $category;
    public $Prixv;
    public $Imagep;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
       /* $query = "SELECT * FROM " . $this->table_name . " ORDER BY IDp DESC LIMIT 15";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;*/
        $query = "SELECT p.IDp, p.Libellép, p.Prixv, p.Imagep, c.Libelléca as catégorie
        FROM " . $this->table_name . " p
        JOIN catégorie c ON p.IDcat = c.IDcat
        ORDER BY p.IDp DESC
        LIMIT 15";
$stmt = $this->conn->prepare($query);
$stmt->execute();
return $stmt;
    }
    public function readc() {
       
         $query = "SELECT IDcat, Libelléca FROM catégorie";
 $stmt = $this->conn->prepare($query);
 $stmt->execute();
 return $stmt;
     }
}
?>