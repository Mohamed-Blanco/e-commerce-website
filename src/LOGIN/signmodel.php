<?php
class UserModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'pharmacie', 3306);

        if ($this->db->connect_error) {
            die('Connection failed: ' . $this->db->connect_error);
        }
    }
    

    public function verify($email, $password) {
        $sql='select emailc, passwordc from client where emailc=? and passwordc=?';
        $stmt = $this->db->prepare($sql);

        $stmt->bind_param("ss", $email,$password);



        $stmt->execute();

        $result = $stmt->get_result();

        
        $stmt->close();
        
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
        


}


public function adduser($prenom,$nom,$email,$password,$tele,$date,$sexe,$age,$adress) {
    $sql='insert into client(Nomc,passwordc,emailc,Telc,Prénom,datenss,sexe,age,adress) values(?,?,?,?,?,?,?,?,?)';
    $stmt = $this->db->prepare($sql);

    $stmt->bind_param("sssssssis",$nom,$password,$email,$tele,$prenom,$date,$sexe,$age,$adress);




    if ($stmt->execute()) {
        return true;
    } else {
        echo "Error inserting record.";
        return false;
    }

    $stmt->close();
}
}

?>


