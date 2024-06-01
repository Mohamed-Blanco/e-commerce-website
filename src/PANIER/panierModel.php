<?php

class PanierModel {
    public function panierproduct($produitName) {  
        include ("connection.php");  
        try {
            $stmt = $conn->prepare("SELECT DISTINCT Libellép, Prixv, Imagep FROM produit WHERE Libellép = ?");
            $stmt->execute([$produitName]); 
            $row = $stmt->fetch(PDO::FETCH_ASSOC); 
            return $row !== false ? $row : null; 
        } catch (PDOException $e) {
            die("Erreur de connexion ou d'exécution de requête: " . $e->getMessage());
        }
    }
}

?>