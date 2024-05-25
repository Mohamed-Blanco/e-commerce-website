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
            echo "lllll";
            return true;
        } else {
            echo "0 results";
            return false;
        }
        


}


public function adduser($prenom,$nom,$email,$password,$tele,$cin,$date) {
    $sql='insert into utilisateur(Nom,Mpasse,Email,Tel,CIN,Prénom,DN) values(?,?,?,?,?,?,?)';
    $stmt = $this->db->prepare($sql);

    $stmt->bind_param("sssssss",$nom,$password,$email,$tele,$cin,$prenom,$date);




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


