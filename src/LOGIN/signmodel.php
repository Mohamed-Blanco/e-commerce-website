<?php

include '../PDOModel.php';

class UserModel {
    private $db;

    public function __construct() {
        $x=new PDOModel();
        $con=$x->getconection();
        $this->db = $con;
    }
    
    

    public function verify($email, $password) {
        $sql='select emailc, passwordc from client where emailc=:email and passwordc=:pass';
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pass', $password);



        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);



        
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
        


}


public function adduser($prenom,$nom,$email,$password,$tele,$date,$sexe,$age,$adress) {
    $sql='insert into client(Nomc,passwordc,emailc,Telc,Prénom,datenss,sexe,age,adress) values(:nom,:pass,:email,:tele,:pren,:datenais,:sexe,:age,:adress)';
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':pass', $password);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tele', $tele);
    $stmt->bindParam(':pren', $prenom);
    $stmt->bindParam(':datenais', $date);
    $stmt->bindParam(':sexe', $sexe);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':adress', $adress);




    if ($stmt->execute()) {
        return true;
    } else {
        echo "Error inserting record.";
        return false;
    }

}
}

?>


