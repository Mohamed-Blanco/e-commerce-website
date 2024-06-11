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
        $sql='select passwordc from client where emailc=:email';
        $stmt = $this->db->prepare($sql);


        $stmt->bindParam(':email', $email);


        $stmt->execute();



        
        if ($stmt->rowCount() > 0) {

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row['passwordc'];
            if (password_verify($password, $hashed_password)) {
                return true;
            }

            
        /*$x=password_verify($password, $hashed_password);

        echo $x;*/

            


            return false;
            
        }else{
            header("Location:login.php?try=100");

        }
        


}


public function adduser($prenom,$nom,$email,$password,$tele,$date,$sexe,$age,$adress) {
    
    $hPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql='insert into client(Nomc,passwordc,emailc,Telc,Prénom,datenss,sexe,age,adress) values(:nom,:pass,:email,:tele,:pren,:datenais,:sexe,:age,:adress)';
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':pass', $hPassword);
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


